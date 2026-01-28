<?php
$connection= mysqli_connect('localhost','root','','products');
$query= "select * from Product";
$result =  mysqli_query($connection,$query);
$data = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <DIV class="d-flex justify-content-center">
<a href="form.php" class="btn btn-dark">ADD</a>
</DIV>
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <th>Sr</th>
            <th>Product Category</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Quantity</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php
            for($i=0; $i<count($data); $i++){
                ?>
                <tr>
                  <td><?php echo $data[$i]['product_id'] ?></td>
                <td><?php echo $data[$i]['product_name']?></td>
                <td><?php echo $data[$i]['product_category']?></td>
                <td><?php echo $data[$i]['product_quantity']?></td>
                <td><?php echo $data[$i]['product_price']?></td>
                <td>

                <a href="editform.php?product_id=<?php echo $data[$i]['product_id']?>" class="btn btn-warning">edit</a>
                <a href="delete.php?product_id=<?php echo $data[$i]['product_id']?>" class="btn btn-danger">delete</a>
                </td>

                </tr>

                <?php
            }?>
            </tbody>
            </table>
                
            </body>
            </html>
            