<?php
$conn = mysqli_connect('localhost', 'root', '', 'examprep');

$id = $_GET['id'];
$query = "SELECT * FROM cars WHERE id = $id";

$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);

$total = mysqli_fetch_assoc($result);

include 'main.html';
?>


<html>

<head>
    <title>Document</title>
</head>

<body>
    <h3 class="text-center mt-5 mb-4">Edit Info: <?php echo $total['car']; ?></h3>
    <div class="container">
        <div style="border: none;" class="card w-50 mx-auto">
            <div class="row">
                <form id="edit_form" class="mx-auto mt-4">
                    <div class="input-group mb-4 mt-4">
                        <span class="input-group-text">ID</span>
                        <input type="number" class="form-control" value="<?php echo $total['id']; ?>" readonly>
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text">Car</span>
                        <input name="car" id="car_car" type="text" class="form-control" value="<?php echo $total['car']; ?>">
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text">Make</span>
                        <input name="make" id="car_make" type="text" class="form-control" value="<?php echo $total['make']; ?>">
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text">Year</span>
                        <input name="year" id="car_year" type="number" class="form-control" value="<?php echo $total['year']; ?>">
                    </div>
                    <div class="input-group mb-4">
                        <span class="input-group-text">Price</span>
                        <input name="price" id="car_price" type="number" class="form-control" value="<?php echo $total['price']; ?>">
                    </div>
                    <button id="submitButton" class="btn btn-dark w-100" onclick="return confirm('Are you sure you want to change the info?')">Confirm</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('#edit_form').on('submit', function(e){
                e.preventDefault()

                let jsonFile = {
                    'car': $('#car_car').val(),
                    'make': $('#car_make').val(),
                    'year': $('#car_year').val(),
                    'price': $('#car_price').val()
                }
                console.log(jsonFile)

                $.ajax({
                    type: 'POST',
                    url: 'http://localhost:85/myshop3/update.php?id=<?php echo $total['id'];?>',
                    data: jsonFile,
                    success: function(response){
                        window.location.href = 'webpage.php';
                        console.log(response)
                    },
                    error: function(error){
                        console.log(error)
                    }
                })
            })
        })
    </script>
</body>

</html>