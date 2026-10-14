<?php
require_once "dbconfig.php";

// Insert query using positional placeholders (?)
$sql = "INSERT INTO grocery_items (product_id, product_name, product_brand, category, price, product_quantity, expiration_date) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $pdo->prepare($sql);

// Bind array of values
$data = [101, "Toddynho Chocolate Milk 200ml", "TODDYNHO", "Beverages", 65, 150, "2027-03-10"];

// Execute insertion
$stmt->execute($data);

echo "New product added successfully!";
?>