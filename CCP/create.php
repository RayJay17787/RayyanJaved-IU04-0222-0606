<?php
$product_name = $_POST['product_name'];
$product_category = $_POST['product_category'];
$product_quantity = $_POST['product_quantity'];
$product_price = $_POST['product_price'];

$connection = mysqli_connect('localhost', 'root', '', 'products');

$query = "INSERT INTO product (product_name, product_category, product_quantity, product_price) 
          VALUES (?, ?, ?, ?)";

$stmt = mysqli_prepare($connection, $query);
mysqli_stmt_bind_param($stmt, "ssss", $product_name, $product_category, $product_quantity, $product_price);
mysqli_stmt_execute($stmt);

header('Location: ' . 'table.php');
?>