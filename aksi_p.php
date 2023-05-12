<?php
    include "koneksi.php";
    
    if(isset($_POST['add'])){
        $id_p = $_POST['id_pose'];
        $id_k = $_POST['id_kategori'];
        $judul = $_POST['judul_pose'];
        
        $direktori = "gambar/";
        $filename = $_FILES['gambar_pose']['name'];
        move_uploaded_file($_FILES['gambar_pose']['tmp_name'],$direktori.$filename);

        mysqli_query($koneksi,"insert into pose values('$id_p','$id_k','$judul','$filename')");

    }
    header("location:pose.php")

?>