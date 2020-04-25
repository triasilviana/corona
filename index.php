<?php
include 'aset/header.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>

body{
  margin: 0;
  padding: 0;
  background: url(corona.png);  
  background-size: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  font-family: sans-serif;
}

  </style>
</head>
<body>
  
 <div class="container">
   <div class="row mt-5">
     <div class="col-md">
       <hr class="bg-light">
     </div>
   </div>
 </div>
 
    <div class="row ml-5">
      <div class="cold-md-4">
        <div class="card bg-info" style="width: 15rem;">
          <div class="card-body text-white">
            <h5 class="card-title">Dalam Perawatan</h5>
          <p class="card-text" style="font-size:60px">268</p>
        <p class="card-text" style="font-size:15px">8.117% dari terkonfirmasi</p>
      </div>
    </div>
  </div>
    <div class="row ml-5">
      <div class="col-md-4">
        <div class="card bg-success" style="width: 15rem;">
          <div class="card-body text-white">
            <h5 class="card-title">Sembuh</h5>
          <p class="card-text" style="font-size:60px">15</p>
        <p class="card-text" style="font-size:15px">4.87% dari terkonfirmasi</p>   
      </div>
    </div>
  </div>
</div>
    <div class="row ml-5">
      <div class="col-md-4">
        <div class="card bg-danger" style="width: 15rem;">
          <div class="card-body text-white">
            <h5 class="card-title">Meninggal</h5>
          <p class="card-text" style="font-size:60px">25</p>
        <p class="card-text" style="font-size:15px">8.117% dari terkonfirmasi</p>
      </div>
    </div>
  </div>
</div>
   <div class="row ml-4">
      <div class="col-md-4">
        <div class="card bg-warning" style="width: 15rem;">
          <div class="card-body text-white">
            <h5 class="card-title">terkonfirmasi</h5>
          <p class="card-text" style="font-size:60px">308</p>
        <p class="card-text" style="font-size:15px">+81 kasus</p>
       </div>
    </div>
  </div>
</div>
    </div>
      </div>
        </body>
      </html>
    <?php
  include 'aset/footer.php';
?>
