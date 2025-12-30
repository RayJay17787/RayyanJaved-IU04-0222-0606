<?php
$conn = mysqli_connect('localhost', 'root', '', 'examprep');

$id = $_GET['id'];
$query = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Product</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../bootstrap-5.3.8-dist/bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.3.8-dist/bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js"></script>
    
</head>

<body>
    <div class="container col-12">
        <div class="row mx-auto">
            <div style="border: none;" class="card mx-auto col-md-6 mt-5">
                <h3 class="mx-auto mb-4">Update Product: <?php echo $row['product_name'];?></h3>
                <form action="http://localhost:85/myshop/update.php" method="post">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Product ID</span>
                        </div>
                        <input name="id" type="number" class="form-control" value="<?php echo $row['id']; ?>" readonly>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Product Name</span>
                        </div>
                        <input name="pname" type="text" class="form-control" value="<?php echo $row['product_name'];?>">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Company</span>
                        </div>
                        <input name="pcompany" type="text" class="form-control" value="<?php echo $row['product_company'];?>">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Category</span>
                        </div>
                        <input name="pcategory" type="text" class="form-control" value="<?php echo $row['product_category'];?>">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Price</span>
                        </div>
                        <input name="pprice" type="number" class="form-control" value="<?php echo $row['product_price'];?>">
                    </div>
                    <button type="submit" class="btn btn-success w-100" onclick="return confirm('Are you sure you want to update this item?')">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>