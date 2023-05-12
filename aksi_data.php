<?php
    include "koneksi.php";
    
    if(isset($_POST['proses'])){
        $id_k = $_POST['id_ktegori'];
        $nama_k = $_POST['nama_kategori'];

        mysqli_query($koneksi,"insert into kategori values('$id_k','$nama_k')");
    }
    header("location:kategori1.php")

?>