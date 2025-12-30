<?php
    $conn = mysqli_connect('localhost', 'root', '', 'examprep');
    $id = $_GET['id'];
    $query = "DELETE FROM students WHERE id = $id";

    $result = mysqli_query($conn, $query);

    header("Location: webpage.php");
    exit();
?>