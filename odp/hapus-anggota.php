<?php 
    $koneksi= mysqli_connect("localhost", "root", "", "corona");
    $id= $_GET['id_odp'];
    $query = mysqli_query($koneksi, "DELETE FROM odp where id_odp=$id");
  

    if($query>0){
        echo "
        <script>
        alert('Data berhasil dihapus, Yeay!');
        document.location.href = 'index.php';
        </script>
        "
        ;
    }
?>