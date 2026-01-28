<?php
$id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$product_category = $_POST['product_category'];
$product_quantity = $_POST['product_quantity'];
$product_price = $_POST['product_price'];

$connection = mysqli_connect('localhost', 'root', '', 'products');

$query = "UPDATE product SET 
    product_name = ?, 
    product_category = ?, 
    product_quantity = ?, 
    product_price = ? 
    WHERE product_id = ?";

$stmt = mysqli_prepare($connection, $query);
mysqli_stmt_bind_param($stmt, "ssssi", $product_name, $product_category, $product_quantity, $product_price, $id);
mysqli_stmt_execute($stmt);

header('Location: ' . 'table.php');
?>