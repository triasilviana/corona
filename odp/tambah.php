<?php
$koneksi = mysqli_connect("localhost", "root", "", "corona");
include '../aset/header.php';
$query =mysqli_query($koneksi, "SELECT* from odp");

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
<div class= "container">
  <div class="row mt-4">
    <div class="col-md-9">
      <div class="card">
        <div class="card-header">
        <h2>Tambah Data ODP</h2>
        </div>

<div class="card-body">
    <form method="post" action="proses-tambah.php">
            <div class="form-group">
            <label for="odp">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" id="odp"
            placeholder="Masukkan nama lengkap">

            </div>
        
        <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" name="alamat" id="alamat"
        placeholder="Masukkan Alamat">

            <small class="form-text text-muted">Contoh: Jl. Bandung</small>
        </div>
        
        <div class="form-group">
        <label for="nama_petugas">Nama Petugas</label>
        <input type="text" class="form-control" name="nama_petugas" id="nama_petugas"
        placeholder="Masukkan Nama Petugas">
        </div>

        <tr>
                <td>Suhu</td>
                <td>

                    <select  style="width: 200px" name="id_suhu">

                   <option value="">-- Pilih Suhu Tubuh--</option>

                   <?php
                        while ($kategori = mysqli_fetch_assoc($query)):
                   ?>

                   <option value="<?php echo $kategori['suhu']; ?>
                   "><?php echo $kategori['suhu']; ?></option>

                   <?php
                        endwhile;
                    ?>
                    
                    </select>
                
                </td>
            </tr>
      

         <button type="submit" class="btn-primary" name="simpan">Simpan</button>
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