<?php
require 'config.php';
error_reporting(E_ERROR|E_PARSE);
$msg="";
if(isset($_POST['submit'])){

    $p_name=$_POST['pName'];
    $p_price=$_POST['pPrice'];
    
    $target_dir="image/";
    
    $target_file=$target_dir.basename($_FILES['pImage']["name"]);
    move_uploaded_file($_FILES['pImage']["tmp_name"],$target_file);

    $sql="INSERT INTO product (product_name,product_price,product_image) VALUES('$p_name','$p_price','$target_file')";
    if(mysqli_query($conn,$sql)){
        $msg="Product Added To The Database Successfully!";
    }
    else{
       $msg="failed to add product to the database"; 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product Information</title>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-info">
    <div class="container">
        <div class="row justify-content-centre">
            <div class="col-nd-6 bg-light nt-5 rounded">
                <h2 class="text-centre p-2">Add Product information</h2>
                <form action="" method="post" class="p-2" encryt="multipart/form-data" id="form-box">
                    
                <div class="form-group">
                      <input type="text" name="Prod_Image" class="form-control" placeholder="Product Code" required>
                    </div>
                    <div class="form-group">
                      <input type="text" name="pName" class="form-control" placeholder="Product Name" required>
                    </div>
                    <div class="form-group">
                      <input type="text" name="pPrice" class="form-control" placeholder="Product Price" required>
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" name="pImage" class="custom-file-input" id="customFile" required>
                            <label for="customFile" class="custom-file-label">Choose Product Image </label>
                        </div>
                    </div> 
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-danger btn-block" value="add">
                    </div> 
                    <div class="form-group">
                        <h4 class="text-centre"><?=$msg; ?></h4>
                    </div>
                          
                </form>  
            </div>
        </div>
        <div class="row justify-content-centre">
         <div class="col-nd-6 nt-3 p-4 bg-light-rounded">
            <a href="index.php" class=" btn btn-warning btn-block btn-lg">Go to product page</a>
         </div>  
        </div>
    </div>
    
</body>
</html>