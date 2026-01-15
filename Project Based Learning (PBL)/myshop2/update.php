<?php
$id = $_POST['id'];
$stid = $_POST['stdid'];
$stname = $_POST['stdname'];
$stdept = $_POST['stddept'];
$stmk1 = $_POST['stdmk1'];
$stmk2 = $_POST['stdmk2'];
$stmk3 = $_POST['stdmk3'];
$stperc = $_POST['stdperc'];

$total_mark = $stmk1 + $stmk2 + $stmk3;
$stperc = ($total_mark / 75) * 100;

$conn = mysqli_connect('localhost', 'root', '', 'examprep');
$stmt = mysqli_prepare($conn, "UPDATE students SET student_id = ?, student_name = ?, student_department = ?, student_mark1 = ?, student_mark2 = ?, student_mark3 = ?, student_percent = ? WHERE id = ?");
mysqli_stmt_bind_param($stmt, "ssssssdi", $stid, $stname, $stdept, $stmk1, $stmk2, $stmk3, $stperc, $id);

mysqli_stmt_execute($stmt);

header("Location: webpage.php");
exit();
?>