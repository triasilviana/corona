<?php

$koneksi = mysqli_connect("localhost","root","","corona");

include '../aset/header.php';

$id=$_GET['id_odp'];

$sql = mysqli_query($koneksi, "SELECT * FROM odp WHERE id_odp = $id");

?>


<!DOCTYPE html>
<head>
    <title>Edit Daftar ODP</title>

    <style>
        body{
        margin: 0;
        padding: 0;
        background: url(web5y.jpg);  
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
    <div class="row mt-4"> 
        <div class="col-md-9"> 
            <div class="card" style="width:100%;"> 
                <div class="card-header" style="width:100%;"> 
                    <h2><i class="fas fa-user-plus"></i>Edit ODP</h2>
                </div> 
                <div class="card-body"> 
                <form action="proses-edit.php" method="post">
                <table class="table">
                <?php
                while ($odp = mysqli_fetch_assoc($sql)):
                    ?>
            <tr>
                <input type="hidden" name="id_odp" value="<?php echo $odp['id_odp'];?>">
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama" value="<?php echo $odp['nama'];?>" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $odp['alamat'];?>"required></td>
            </tr>     
            
            <tr>
                <td>Nama Petugas</td>
                <td><input type="text" name="nama_petugas" value="<?php echo $odp['nama_petugas'];?>" required></td>
            </tr>
            <tr>
                <td>Suhu</td>
                <td><input type="text" name="suhu" value="<?php echo $odp['suhu'];?>" required></td>
            </tr>
            <?php
                endwhile;
                ?>
            <tr>
                <th></th>
                <th><input type="submit" class="btn btn-primary" name="simpan"
                value="simpan"></th>
            </tr>
            </table>
            </form>
                </div>
            </div>
        </div>   
    </div>
</div>
</body>
</html>

<?php

include '../aset/footer.php';

?>