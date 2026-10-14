<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$dbname = "bacarro_grocery_db";

// Connect using PDO
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
?>
