<?php

$koneksi= mysqli_connect("localhost","root","","corona");

$sql= "SELECT* from odp ORDER BY nama";

$res = mysqli_query($koneksi, $sql);

$odp= [];

while($data = mysqli_fetch_assoc($res)){
    $odp[] = $data;
}
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
    }

    th, td {
        padding: 40px 40px 40px 40px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        color: black;
    }
        
    
    
    
    
    </style>
</head>
<body>

<div class= "card">
<div class="card-header">
<h2 class="card-title"><i class="fas fa-edit"></i>Data ODP</h2>
</div>
<div class="card-body">
<td class="text-rigth" colspan="2">
<a href="tambah.php" class="badge badge-info">Tambah Data ODP</a>
</td>
<table class="table table-striped bg bg-light">


<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Nama</th>
<th scope="col">Alamat</th>
<th scope="col">aksi</th>

</tr>
</thead>

<tbody>
<?php
$no =1;
foreach($odp as $o) {?>

<tr>
<td scope="row"><?=$no?></td>
<td><?=$o['nama']?></td>
<td><?=$o['alamat']?></td>

<td>

<a href="detail-anggota.php?id_odp=<?=$o['id_odp'];?>" class="badge badge-success
    ">Detail</a>
    <a href="edit-anggota.php?id_odp=<?=$o['id_odp'];?>" class="badge badge-warning
    ">Edit</a>
    <a href="hapus-anggota.php?id_odp=<?=$o['id_odp'];?>" class="badge badge-danger
    ">Hapus</a>

</td>
</tr>

<?php
$no++;
}
?>
</tbody>
</table>
</div>
</div>
    
</body>
</html>


<?php
include '../aset/footer.php';
?>