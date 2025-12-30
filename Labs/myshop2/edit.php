<?php
    $id = $_GET['id'];
    
    $conn = mysqli_connect('localhost','root','','examprep');
    $query = "SELECT * FROM students WHERE id = $id";
    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_assoc($result);
?>

<html>
<head>
    <title>Edit Entry</title>
    <link rel="stylesheet" href="../../bootstrap-5.3.8-dist/bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <script src="../../bootstrap-5.3.8-dist/bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="http://localhost:85/myshop2/style.css">
</head>
<body>
    <div class="container col-12">
        <div style="border: none;" class="mt-4 card mx-auto">
            <h3 class="mx-auto mb-4">Update Form: <?php echo $row['student_name'];?></h3>
            <div class="row mx-auto w-50">
                <form action="http://localhost:85/myshop2/update.php" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text">ID</span>
                        <input name = "id" value="<?php echo $row['id'];?>" type="number" class="form-control text-center" readonly>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Student ID</span>
                        <input name = "stdid" value="<?php echo $row['student_id'];?>" type="text" class="form-control text-center">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Student Name</span>
                        <input name = "stdname" value="<?php echo $row['student_name'];?>" type="text" class="form-control text-center">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Student Department</span>
                        <input name = "stddept" value="<?php echo $row['student_department'];?>" type="text" class="form-control text-center">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Mark 1</span>
                        <input name = "stdmk1" value="<?php echo $row['student_mark1'];?>" type="number" class="form-control text-center">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Mark 2</span>
                        <input name = "stdmk2" value="<?php echo $row['student_mark2'];?>" type="number" class="form-control text-center">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Mark 3</span>
                        <input name = "stdmk3" value="<?php echo $row['student_mark3'];?>" type="number" class="form-control text-center">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Percentage</span>
                        <input name = "stdperc" value="<?php echo $row['student_percent'];?>%" type="text" class="form-control text-center" readonly>
                    </div>
                    <button type="submit" onclick="return confirm('Are you sure you want to update the information for <?php echo $row['student_name'];?>?')" class="btn btn-success w-100">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>