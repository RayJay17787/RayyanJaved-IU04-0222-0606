<?php
    $id = $_POST['id'];
    $pname = $_POST['pname'];
    $pcompany = $_POST['pcompany'];
    $pcategory = $_POST['pcategory'];
    $pprice = $_POST['pprice'];
    
    $conn = mysqli_connect('localhost', 'root', '', 'examprep');
    $query = "UPDATE products SET product_name = '$pname', product_company = '$pcompany', product_category = '$pcategory', product_price = '$pprice' WHERE id = $id";

    mysqli_query($conn, $query);

    header("Location: form&table.php");    
?>