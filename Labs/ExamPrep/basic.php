<?php

    $id = $_POST['user_id'];
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $mark1 = $_POST['user_mark1'];
    $mark2 = $_POST['user_mark2'];
    $mark3 = $_POST['user_mark3'];

    $float_mark1 = floatval ($mark1);
    $float_mark2 = floatval ($mark2);
    $float_mark3 = floatval ($mark3);

    $totalMark = (float) $float_mark1 + $float_mark2 + $float_mark3;
    $totalPerc = (float) ($totalMark / 75) * 100;

    $conn = mysqli_connect('localhost', 'root','', 'examprep');
    $query = "INSERT INTO studetail(id,name,email,mark1,mark2,mark3,percent) values('$id','$name','$email','$float_mark1','$float_mark2','$float_mark3','$totalPerc')";
    mysqli_query($conn,$query);

?>