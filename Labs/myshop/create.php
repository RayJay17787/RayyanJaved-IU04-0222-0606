<?php
    //header('Access-Control-Allow-Origin: *');
    //header('Access-Control-Allow-Method: *');
    //header('Content-Type: application/json');
    $name = $_POST['pname'];
    $company = $_POST['pcompany'];
    $category = $_POST['pcategory'];
    $price = $_POST['pprice'];

    $conn = mysqli_connect('localhost', 'root','','examprep');
    $query = "INSERT INTO products(product_name,product_company,product_category,product_price) values('$name','$company','$category','$price')";
    if(mysqli_query($conn, $query)){
        $response['msg'] = "Data Inserted Successfully";
        $response['code'] = "201";
        echo json_encode($response);
    }
    else{
        $response['msg'] = "Something Went Wrong";
        $response['code'] = "500";
        echo json_encode($response);
    }

    //header("Location: form&table.php");
?>