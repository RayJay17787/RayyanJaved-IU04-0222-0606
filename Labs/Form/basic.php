<?php
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];

    $dob = $day . " " . $month . " " . $year;

    $conn = mysqli_connect('localhost', 'root', '', 'sm-db-wpl');
    $query = "INSERT INTO fb_signup_table(first_name,last_name,dob,gender,contact,password) values('$first_name','$last_name','$dob','$gender','$contact','$password')";
    mysqli_query($conn,$query);
?>