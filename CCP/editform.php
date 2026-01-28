    <?php
    $id = $_GET["product_id"];
    $connection= mysqli_connect('localhost','root','','products');
    $query= "select * from product where product_id=$id";
    $result =  mysqli_query($connection,$query);
    $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
    ?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>

        <div class="container ">
            <div class="row">
            <div class="col-6">
                <div class="card ">
                    <div class="card-body">
                        <h1>product form</h1>
                        <form action="editsubmit.php" method="post">

                        <div class="form-group">
                                
                        <label>product id</label>
                    
                            <input type="hidden" value="<?php echo $data[0]['product_id']?>" name="product_id" id="product_id" class="form-control" >
                        </div>
                            <div class="form-group">

                        <label>product name</label>
                    
                            <input type="text" value="<?php echo $data[0]['product_name']?>" name="product_name" id="product_name" class="form-control" >
                        </div>
                            <div class="form-group">
                        <label>product category</label>
                    
                            <input type="text" value="<?php echo $data[0]['product_category']?>" name="product_category" id="product_category" class="form-control" >
                        </div>
                            <div class="form-group">
                        <label>product quantity</label>
                    
                            <input type="number" value="<?php echo $data[0]['product_quantity']?>" name="product_quantity" id="product_quantity" class="form-control" >
                        </div>
                            <div class="form-group">
                        <label>product price</label>
                    
                            <input type="text"  value="<?php echo $data[0]['product_price']?>" name="product_price" id="product_price" class="form-control" >
                        </div>
                        <div class="d-flex justify-content-center">
                        <input type="submit" class="btn btn-primary"  value="submit">
    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>