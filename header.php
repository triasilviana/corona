<?php
session_start();

if(!(isset($_SESSION['id_petugas'])))
{
    header("Location: http://localhost/corona/login/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="http://localhost/corona/aset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/corona/aset/fontawesome/css/all.min.css">

    <title>Siperpus</title>
</head>
<body>
    
    <script src="http://localhost/corona/aset/jquery.js"></script>
    <script src="http://localhost/corona/aset/bootstrap/js/bootstrap.min.js"></script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Corona Virus | Hai, admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" 
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
     
      <a class="nav-item nav-link" href="http://localhost/corona/about/index.php">About</a>
      <a class="nav-item nav-link" href="http://localhost/corona/index.php">Dashboard</a>
      <a class="nav-item nav-link" href="http://localhost/corona/odp/index.php">ODP</a>
      <a class="nav-item nav-link" href="http://localhost/corona/detail/index.php">Detail</a>
      <a class="nav-item nav-link" href="http://localhost/corona/login/logout.php">Logout</a>
      <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </div>
  </div>
</nav>
</body>
</html>
















