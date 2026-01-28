<?php
$id = $_GET['product_id'];

$connection = mysqli_connect('localhost', 'root', '', 'products');
$query = "delete from product where product_id = '$id' ";
$result = mysqli_query($connection, $query);

header('Location: '.'table.php');