<?php
require_once "dbconfig.php";

// Delete query using standard positional parameter
$sql = "DELETE FROM grocery_items WHERE product_id = ?";
$stmt = $pdo->prepare($sql);

// Delete product with ID 1
$stmt->execute([1]);

echo "Product deleted successfully!";
?>