<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thankyou for purchasing</title>
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
    <div class="container">
        <div class="row">
         <div class="col-md-8">
          <h1>Thankyou for purchasing</h1>
          <?php
           include 'instamojo/Instamojo.php';
           $authType = "app/user"; /**Depend on app or user based authentication**/
           $api = Instamojo\Instamojo::init($authType,[
            "client_id" =>  'XXXXXQAZ',
            "client_secret" => 'XXXXQWE',
            "username" => 'FOO', /** In case of user based authentication**/
            "password" => 'XXXXXXXX' /** In case of user based authentication**/
        ]);
        ?>           
         </div>   
        </div>
    </div>
</body>
</html>