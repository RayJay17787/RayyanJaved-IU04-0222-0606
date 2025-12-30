<?php
    $conn = mysqli_connect('localhost', 'root', '', 'examprep');
    $id = $_GET['id'];
    $query = "DELETE FROM cars WHERE id = $id";
    mysqli_query($conn, $query);
    header("Location: webpage.php");
?>