<?php
$stid = $_POST['stid'];
$stname = $_POST['stname'];
$stdept = $_POST['stdept'];
$stmk1 = $_POST['stmk1'];
$stmk2 = $_POST['stmk2'];
$stmk3 = $_POST['stmk3'];

$total_mark = $stmk1 + $stmk2 + $stmk3;
$total_perc = ($total_mark / 75) * 100;

$conn = mysqli_connect('localhost', 'root', '', 'examprep');
$stmt = mysqli_prepare($conn, "INSERT INTO students (student_id, student_name, student_department, student_mark1, student_mark2, student_mark3, student_percent) VALUES (?, ?, ?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "ssssssd", $stid, $stname, $stdept, $stmk1, $stmk2, $stmk3, $total_perc);

if (mysqli_stmt_execute($stmt)) {
    $response['msg'] = 'successful';
    $response['code'] = '201';
} else {
    $error['msg'] = 'failed!';
    $error['code'] = '500';
}
?>