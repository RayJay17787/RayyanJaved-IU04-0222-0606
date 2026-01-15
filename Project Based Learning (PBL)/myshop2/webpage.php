<?php
$conn = mysqli_connect('localhost', 'root', '', 'examprep');
?>

<html>

<head>
    <title>Document</title>
    <link rel="stylesheet" href="../../bootstrap-5.3.8-dist/bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <script src="../../bootstrap-5.3.8-dist/bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="http://localhost:85/myshop2/style.css">
</head>

<body>
    <div class="container col-12">
        <div style="border: none;" class="card mt-4">
            <h3 class="mx-auto">Form And Table</h3>
            <div class="row mt-3">
                <div class="col col-md-6">
                    <h4 class="text-center mb-3">Form</h4>
                    <form id="form" class="mt-4"> <!-- action="http://localhost:85/myshop2/create.php" method="post" -->
                        <div class="input-group mt-4 mb-4">
                            <span class="input-group-text">Student ID</span>
                            <input id="std_id" name="stid" placeholder="Student's ID" type="number" class="form-control">
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text">Name</span>
                            <input id="std_name" name="stname" placeholder="Name of Student" type="text" class="form-control">
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text">Department</span>
                            <input id="std_dept" name="stdept" placeholder="Department of Student" type="text" class="form-control">
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text">Mark 1</span>
                            <input id="std_mk1" name="stmk1" placeholder="Enter First Mark" type="number" class="form-control">
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text">Mark 2</span>
                            <input id="std_mk2" name="stmk2" placeholder="Enter Second Mark" type="number" class="form-control">
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text">Mark 3</span>
                            <input id="std_mk3" name="stmk3" placeholder="Enter Third Mark" type="number" class="form-control">
                        </div>
                        <button id="submitButton" type="submit" class="btn btn-outline-primary w-100 rounded-pill">Submit</button>
                    </form>
                </div>
                <div class="col mx-auto col-md-6">
                    <h4 class="text-center mb-3">Table</h4>
                    <div class="table-responsive">
                        <table id="table" class="text-center table table-hover">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Name</th>
                                    <th>Department</th>
                                    <th>Mark 1</th>
                                    <th>Mark 2</th>
                                    <th>Mark 3</th>
                                    <th>Percentage</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT * FROM students";
                                $result = mysqli_query($conn, $query);
                                $total = mysqli_num_rows($result);

                                for ($i = 0; $i < $total; $i++) {
                                    $row = mysqli_fetch_assoc($result);
                                ?>
                                    <tr>
                                        <td><?php echo $row['student_id']; ?></td>
                                        <td><?php echo $row['student_name']; ?></td>
                                        <td><?php echo $row['student_department']; ?></td>
                                        <td><?php echo $row['student_mark1']; ?></td>
                                        <td><?php echo $row['student_mark2']; ?></td>
                                        <td><?php echo $row['student_mark3']; ?></td>
                                        <td><?php echo $row['student_percent']; ?>%</td>
                                        <td>
                                            <a href="http://localhost:85/myshop2/edit.php?id=<?php echo $row['id']; ?>"><button class="btn btn-warning btn-sm">Edit</button></a>
                                            <a href="http://localhost:85/myshop2/delete.php?id=<?php echo $row['id']; ?>"><button onclick="return confirm('Are you sure you want to delete this entry?')" class="btn btn-danger btn-sm">Delete</button></a>
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
    </div>

    <script>
        
    </script>
</body>

</html>