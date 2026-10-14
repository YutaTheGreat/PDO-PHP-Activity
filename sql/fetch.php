<?php
require_once "dbconfig.php";

// Select only product with ID 1
$sql = "SELECT * FROM grocery_items WHERE product_id = 1";
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Get single row
$item = $stmt->fetch(PDO::FETCH_ASSOC);

// Output result
echo "<pre>";
print_r($item);
echo "</pre>";
?>