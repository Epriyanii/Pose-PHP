<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inspirasi Pose Foto</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: PhotoFolio - v1.0.0
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center  me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <i class="bi bi-camera"></i>
        <h1>Pose Foto</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li class="dropdown"><a href="#"><span>Gallery</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="solo.php">Solo</a></li>
              <li><a href="posebg.php">Pose(BG)</a></li>
              <li><a href="posegg.php">Pose(GG)</a></li>
            </ul>
          <li class="dropdown"><a href="#" class="active"><span>Table</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="kategori1.php">Kategori</a></li>
              <li><a href="pose.php">Pose</a></li>
              <li><a href="user.php">Daftar Kunjungan</a></li>
            </ul>
      </nav><!-- .navbar -->

      <div class="header-social-links">
      </div>
      <a href="https://instagram.com/gdlovexp" class="instagram"><i class="bi bi-instagram"></a></i>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>Pose</h2>
          <p> </p>
          <a href="tdp.php" class="btn-get-started">Tambahkan Pose?</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main" data-aos="fade" data-aos-delay="1500">
  <section id="handap" class="handap d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
  <style>
      th{padding:10px;}
      td{padding:10px;}
  </style>

    <table border="">
      <tr bgcolor="#000">
        <th align=center width="80">ID Pose</th>
        <th align=center width="150">Nama Kategori</th>
        <th width="150" align=center>Judul Pose</th>
        <th align=center width="150">Gambar Pose</th>
        <th align=center width="80">EDIT</th>
        <th align=center width="80">HAPUS</th>
      </tr>

  <form action="tdp.php" 
  <!-- Pembukaan -->
  <?php
  include "koneksi.php";

  if(isset($_GET['id_pose'])){
    $id_pose = $_GET['id_pose'];
    mysqli_query($koneksi,"DELETE FROM pose WHERE id_pose='$id_pose'");
  }


  $query = mysqli_query($koneksi,"SELECT * FROM vdatapose");
  
  while($kolom = mysqli_fetch_array($query)){
      $id_p = $kolom["id_pose"];
      $id_k = $kolom["nama_kategori"];
      $judul = $kolom["judul_pose"];
      $gambar = $kolom["gambar_pose"];
      $edit ="<a href=edit_p.php?id_pose=$id_p>Update</a>";
      $hapus ="<a href=?id_pose=$id_p>Delete</a>";
      echo "<tr><td align=center>$id_p</td><td align=center>$id_k</td><td>$judul</td><td align=center>$gambar</td><td align=center>$edit</td><td align=center>$hapus</td></tr>";
  }

  echo "</table></br></br>";
  
  ?>
  </section>

  </main><!-- End #main -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>