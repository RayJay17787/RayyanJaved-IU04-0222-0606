<?php
    $mobile = $_POST['mob'];
    $password = $_POST['pass'];
    $name = $_POST['fname'];
    $username = $_POST['user_name'];

    $conn = mysqli_connect('localhost','root','','sm-db-wpl');
    $query = "INSERT INTO ig_signup_table(mob,pass,fname,user_name) values('$mobile','$password','$name','$username')";
    mysqli_query($conn,$query);
?>