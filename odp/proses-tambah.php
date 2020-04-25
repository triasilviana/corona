<?php
$koneksi = mysqli_connect("localhost", "root","","corona");

if(isset($_POST['simpan']))
{
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$nama_petugas=$_POST['nama_petugas'];
$suhu=$_POST['id_suhu'];


$sql= "INSERT INTO odp (nama,alamat, nama_petugas, suhu)
    VALUES('$nama', '$alamat', '$nama_petugas', '$suhu')";

$res = mysqli_query($koneksi,$sql);

$count = mysqli_affected_rows($koneksi);

if($count == 1)
{
    header("Location: index.php");
}
else
{
    var_dump($sql);die;
    header("Location:tambah.php");
}

}

?>