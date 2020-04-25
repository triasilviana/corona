<?php  
$koneksi = mysqli_connect("localhost","root","","corona");
include '../aset/header.php';

$id = $_GET['id_odp'];

$sql = "SELECT * FROM odp WHERE id_odp=$id";
$res = mysqli_query($koneksi, $sql);
$query= mysqli_fetch_assoc($res);
// var_dump($detail);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Data ODP</title>
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
		color: white;
	}
	
	tr td{
		color:yellow;
	}
		</style>

</head>
<body>
<div class="container">
	<div class="row mt-4">
		<div class="col-md-7">
			<h2>Detail Data ODP</h2>
			<hr class="bg-ligth">
			<table class="table table-bordered">
				<tr>
					<td><strong>Nama Lengkap</strong></td>
					<td><?=$query['nama'];?></td>
				</tr>
				<tr>
					<td><strong>Alamat</strong></td>
					<td><?=$query['alamat']?></td>
				</tr>


				</tr>
		
				</tr>
				<tr>
					<td><strong>Nama Petugas</strong></td>
					<td><?=$query['nama_petugas']?></td>
				</tr>

				<tr>
					<td><strong>Suhu</strong></td>
					<td><?=$query['suhu']?></td>
				</tr>
				
				<tr>
					<td class="text-rigth" colspan="2">
						<a href="index.php" class="btn btn-success"><i class="fas fa-angle-double-left"></i>Kembali</a>

					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
</body>
</html>
<?php  
include '../aset/footer.php';
?>