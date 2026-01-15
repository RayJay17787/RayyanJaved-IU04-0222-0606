<?php
$conn = mysqli_connect('localhost', 'root', '', 'examprep');
$id = $_GET['id'];
$stmt = mysqli_prepare($conn, "DELETE FROM students WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

header("Location: webpage.php");
exit();
?>