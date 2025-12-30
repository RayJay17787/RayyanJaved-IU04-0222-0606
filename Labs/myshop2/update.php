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
    $query = "UPDATE students SET student_id = '$stid', student_name = '$stname', student_department = '$stdept', student_mark1 = '$stmk1', student_mark2 = '$stmk2', student_mark3 = '$stmk3', student_percent = '$stperc' WHERE id = $id";

    mysqli_query($conn, $query);

    header("Location: webpage.php");
    exit();
?>