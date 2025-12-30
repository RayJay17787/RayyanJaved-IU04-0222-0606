<?php

    $id = $_GET['id'];

    $car = $_POST['car'];
    $make = $_POST['make'];
    $year = $_POST['year'];
    $price = $_POST['price'];

    $conn = mysqli_connect('localhost', 'root','', 'examprep');
    $query = "UPDATE cars SET car = '$car', make = '$make', year = '$year', price = '$price' WHERE id = $id";

    if(mysqli_query($conn, $query)){
        $response['msg'] = "SUCCESSFUL!";
        $response['code'] = '201';
        echo json_encode($response);
    }
    else{
        $error['response'] = 'Failed';
        $error['code'] = '500';
        echo json_encode($error);
    }
?>