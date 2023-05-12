<?php
    include "koneksi.php";

    $id_pose = $_GET['id_pose'];
    $query = mysqli_query($koneksi,"SELECT * FROM pose WHERE id_pose='$id_pose'");
    $kolom = mysqli_fetch_array($query);
    //untuk menyimpan
    if(isset($_POST['update'])){
        $id_pose = $_POST['id_pose'];
        $id_kategori = $_POST['id_kategori'];
        $judul_pose = $_POST['judul_pose'];
        $gambar_pose = $_POST['gambar_pose'];
        mysqli_query($koneksi,"UPDATE pose SET id_kategori='$id_kategori', judul_pose='$judul_pose', gambar_pose='$gambar_pose' WHERE id_pose='$id_pose'");
        header("location : pose.php");
    }
    ?>
