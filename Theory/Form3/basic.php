<?php
    $name = $_POST['fname'];
    $username = $_POST['user_name'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    $dob = $day . '-' . $month . '-' . $year;

    $conn = mysqli_connect('localhost','root','','sm-db-wpl');
    $query = "INSERT INTO x_signup_table(name,username,date_of_birth) values('$name','$username','$dob')";
    mysqli_query($conn,$query);
?>