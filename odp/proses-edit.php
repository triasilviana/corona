<?php

$koneksi = mysqli_connect("localhost", "root", "", "corona");

if(isset($_POST['simpan']))
{
    $id =$_POST['id_odp'];
    $nama = $_POST['nama'];
    $alamat= $_POST['alamat'];
    $nama_petugas = $_POST['nama_petugas'];
    $suhu= $_POST['suhu'];

$query =mysqli_query($koneksi, "UPDATE odp SET nama='$nama', alamat ='$alamat',
         nama_petugas='$nama_petugas', suhu='$suhu' WHERE id_odp =$id");


if($query>0)
{
    echo
    "
    <script>
    alert('data berhasil di edit horeee!');
    document.location.href ='index.php';
    </script>
    ";
}
else
{
    echo
    "
    <script>
    alert('data berhasil di edit horeee!');
    document.location.href ='index.php';
    </script>
    ";
}
}

?>