<?php

$koneksi= mysqli_connect("localhost","root","","corona");
include '../aset/header.php';
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
        background: url(dok.jpg);  
        background-size: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: sans-serif;

    }

    p{
       
        color: #ffffff;
        text-indent: 100px;
        line-height: 15px;
        word-spacing: 5px;
        padding :1px 1px 1px 1px;

    }

    td{
        padding :1px 1px 1px 1px;
        position: center;

    }
    
    
    </style>
</head>
<body>

<center>
<br>
<br>
<br>
    <p>Infeksi virus Corona disebut COVID-19 </p>
     <p>(Corona Virus Disease 2019) dan pertama </p>
        <p>kali ditemukan di kota Wuhan, China </p>
        <p>pada akhir Desember 2019.Virus ini</p>
        <p> menular dengan sangat cepat dan telah</p>
        <p> menyebar ke hampir semua negara, termasuk </p>
        <p>Indonesia, hanya dalam waktu beberapa bulan.</p>


    <a href="https://www.alodokter.com/virus-corona" class="btn btn-info">Detail</a>
    </center>
    
</div>  
</html>


<?php
include '../aset/footer.php';
?>