<?php
    $conn = mysqli_connect('localhost', 'root', '', 'examprep');
    $id = $_GET['id'];
    $query = "DELETE FROM products WHERE id = $id";
    $query2 = "ALTER TABLE products AUTO_INCREMENT = $id";

    mysqli_query($conn, $query);
    mysqli_query($conn, $query2);
    header("Location: form&table.php");
    exit();
?>