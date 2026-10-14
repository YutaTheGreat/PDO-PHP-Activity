<?php
require_once "dbconfig.php";

// Fetch 10 items to display
$sql = "SELECT * FROM grocery_items LIMIT 10";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Grocery Table</title>
</head>
<body>

<h2>Grocery Items List</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Brand</th>
        <th>Category</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Expiration Date</th>
    </tr>

    <?php foreach ($items as $item) { ?>
        <tr>
            <td><?php echo $item['product_id']; ?></td>
            <td><?php echo $item['product_name']; ?></td>
            <td><?php echo $item['product_brand']; ?></td>
            <td><?php echo $item['category']; ?></td>
            <td><?php echo $item['price']; ?></td>
            <td><?php echo $item['product_quantity']; ?></td>
            <td><?php echo $item['expiration_date']; ?></td>
        </tr>
    <?php } ?>

</table>

</body>
</html>