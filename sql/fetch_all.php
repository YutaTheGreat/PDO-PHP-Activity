<?php
// Include the database connection file
require_once "dbconfig.php";

// SQL query to select all items
$sql = "SELECT * FROM grocery_items";
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Get all rows
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Output result in readable format
echo "<pre>";
print_r($items);
echo "</pre>";
?>