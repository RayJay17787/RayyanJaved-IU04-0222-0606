<?php
$conn = mysqli_connect('localhost', 'root', '', 'examprep');
?>

<html>

<head>
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../bootstrap-5.3.8-dist/bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <script src="../bootstrap-5.3.8-dist/bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../bootstrap-5.3.8-dist/jquery/jquery-3.7.1.js"></script>
</head>

<body class="w-100">
    <div class="container col-12">
        <div class="row mt-3">
            <div class="col col-md-6">
                <div style="border: none;" class="card mt-5 mx-auto">
                    <form id="form" class="mx-2"> <!--action="http://localhost:85/myshop/create.php" method="post"-->
                        <div class="input-group mb-5">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><b>Product Name</b></span>
                            </div>
                            <input id="p_name" name="pname" type="text" class="form-control">
                        </div>
                        <div class="input-group mb-5">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><b>Product Company</b></span>
                            </div>
                            <input id="p_company" name="pcompany" type="text" class="form-control">
                        </div>
                        <div class="input-group mb-5">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><b>Product Category</b></span>
                            </div>
                            <input id="p_category" name="pcategory" type="text" class="form-control">
                        </div>
                        <div class="input-group mb-5">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><b>Product Price</b></span>
                            </div>
                            <input id="p_price" name="pprice" type="number" class="form-control">
                        </div>
                        <div class="button">
                            <button type="submit" id="submitButton" class="btn btn-primary-dark rounded-pill w-100">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col col-md-6">
                <table class="mt-3 text-center table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Product ID</th>
                            <th>Name</th>
                            <th>Company</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $fetch_query = "SELECT * FROM products";
                        $result = mysqli_query($conn, $fetch_query);
                        $total = mysqli_num_rows($result);

                        for ($i = 0; $i < $total; $i++) {
                            $row = mysqli_fetch_assoc($result);
                        ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['product_name']; ?></td>
                                <td><?php echo $row['product_company']; ?></td>
                                <td><?php echo $row['product_category']; ?></td>
                                <td><?php echo $row['product_price']; ?></td>
                                <td>
                                    <a href="http://localhost:85/myshop/edit.php?id=<?php echo $row['id']; ?>"><button class="btn btn-warning btn-sm">Edit</button></a>
                                    <a href="http://localhost:85/myshop/delete.php?id=<?php echo $row['id']; ?>"><button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        // JQUERY
        $(document).ready(function() {
                $('#form').on('submit', function(e) {
                    e.preventDefault()

                    //JSON Format
                    let data = {
                        'pname': $('#p_name').val(),
                        'pcompany': $('#p_company').val(),
                        'pcategory': $('#p_category').val(),
                        'pprice': $('#p_price').val(),
                    }
                    console.log(data)
                    $.ajax({
                        type: 'POST',
                        url: 'http://localhost:85/myshop/create.php',
                        data: data,
                        success: function(response) {
                            location.reload()
                            console.log(response)
                        },
                        error: function(error) {
                            console.log(error)
                        }
                    })
                })
        })
    </script>
</body>

</html>