<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">meghana</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav mi-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">categories </a>
      </li>
    </ul>
  </div>
</nav>
<?php
require 'config.php';
$sql="SELECT * FROM product";
$result=mysqli_query($conn,$sql);
?>
<div class="container">
    <div class="row">
        <?php
        while($row=mysqli_fetch_array($result)){
        ?>
        
                
                
                <?php
                  $dir = "image/"; 
                  $_ProdCode = $row['product_code'];
                  echo "<img src='" . $dir . "/" .$_ProdCode. ".JPEG' class='img-responsive img-rounded img-thumbnail' width=150px alt='".$_ProdCode."'>";
                ?>
                <h5 class="card-title">Product: <?= $row['product_name'];?></h5>
                <h3>Price: <?= number_format($row['product_price']); ?>/-</h3>
                <a href="order.php?id=<?= $row['id']; ?>" class="btn-danger btn-block btn-lg">Buy now</a>
            </div>
           </div> 
        </div>
    <?php } ?>
    </div>
</div>   
</body>
</html>