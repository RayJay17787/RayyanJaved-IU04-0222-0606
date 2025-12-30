<?php
$conn = mysqli_connect('localhost', 'root', '', 'examprep');
include 'main.html';
?>


<html>

<head>
    <title>Table and Form</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row col-12 g-3">
            <div class="col col-md-6">
                <h3 class="text-center">Form</h3>
                <form id="form">
                    <div class="input-group mt-4 mb-4">
                        <span class="input-group-text">Car</span>
                        <input name="car" id="car_car" type="text" class="form-control">
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text">Make</span>
                        <input name="make" id="car_make" type="text" class="form-control">
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text">Year</span>
                        <input name="year" id="car_year" type="number" class="form-control">
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text">Price</span>
                        <input name="price" id="car_price" type="number" class="form-control">
                    </div>
                    <button class="btn btn-dark w-100 rounded-pill" id="btn" type="submit">Submit</button>
                </form>
            </div>
            <div class="col col-md-6">
                <h3 class="text-center">Table</h3>
                <div class="table-responsive">
                    <table style="overflow: hidden;" class="table table-hover text-center">
                        <thead>
                            <tr>
                                <td>S.no</td>
                                <td>Car</td>
                                <td>Make</td>
                                <td>Year</td>
                                <td>Price</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $fetch_query = "SELECT * FROM cars";
                            $result = mysqli_query($conn, $fetch_query);
                            $row = mysqli_num_rows($result);

                            for ($i = 0; $i < $row; $i++) {
                                $total = mysqli_fetch_assoc($result);
                            ?>
                                <tr>
                                    <td><?php echo $i + 1 ?></td>
                                    <td><?php echo $total['car']; ?></td>
                                    <td><?php echo $total['make']; ?></td>
                                    <td><?php echo $total['year']; ?></td>
                                    <td><?php echo $total['price']; ?></td>
                                    <td>
                                        <div class="d-flex gap-2 justify-content-center">
                                            <a href="http://localhost:85/myshop3/edit.php?id=<?php echo $total['id']; ?>"><button class="btn btn-warning btn-sm">Edit</button></a>
                                            <a href="http://localhost:85/myshop3/delete.php?id=<?php echo $total['id']; ?>"><button onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger btn-sm">Delete</button></a>
                                        </div>
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
    </div>

    <script>
        $(document).ready(function() {
            $('#form').on('submit', function(e) {
                e.preventDefault()

                let jsonFile = {
                    'car': $('#car_car').val(),
                    'make': $('#car_make').val(),
                    'year': $('#car_year').val(),
                    'price': $('#car_price').val(),
                }
                console.log(jsonFile)

                $.ajax({
                    type: 'POST',
                    url: 'http://localhost:85/myshop3/create.php',
                    data: jsonFile,
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