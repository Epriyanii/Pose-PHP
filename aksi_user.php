<?php
    include "koneksi.php";
    
    if(isset($_POST['input'])){
        $phone = $_POST['phone'];
        $nama = $_POST['nama_user'];
        $tanggal = $_POST['tanggal_kunjungan'];

        mysqli_query($koneksi,"insert into user values('$phone','$nama','$tanggal')");
    }
    header("location:galery.php")

?>