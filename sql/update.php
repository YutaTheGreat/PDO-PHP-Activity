<?php
require_once "dbconfig.php";

// Update query
$sql = "UPDATE grocery_items SET price = ?, product_quantity = ? WHERE product_id = ?";
$stmt = $pdo->prepare($sql);

// Execute update for product ID 2
$stmt->execute([350, 50, 2]);

echo "Product updated successfully!";
?>