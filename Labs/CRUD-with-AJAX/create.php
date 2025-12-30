<?php
    $car = $_POST['car'];
    $make = $_POST['make'];
    $year = $_POST['year'];
    $price = $_POST['price'];

    $conn = mysqli_connect('localhost', 'root', '', 'examprep');

    $query = "INSERT INTO cars(car,make,year,price) values('$car','$make','$year','$price')";

    if(mysqli_query($conn, $query)){
        $response['msg'] = 'successful';
        $response['code'] = '201';
        echo json_encode($response);
    }
    else{
        $error['msg'] = 'failed';
        $error['code'] = '500';
        echo json_encode($error);
    }
?>