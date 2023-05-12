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
          <li class="dropdown"><a href="#"><span>Table</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
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
          <h2>Silahkan Ubah Data</h2>
          <p> </p>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main" data-aos="fade" data-aos-delay="1500">
  <section id="handap" class="handap d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <?php
    include "koneksi.php";

    $id_ktegori = $_GET['id_ktegori'];
    $query = mysqli_query($koneksi,"SELECT * FROM kategori WHERE id_ktegori='$id_ktegori'");
    $kolom = mysqli_fetch_array($query);
    //untuk menyimpan
    if(isset($_POST['edit'])){
        $id_kategori = $_POST['id_ktegori'];
        $nama_kategori = $_POST['nama_kategori'];
        mysqli_query($koneksi,"UPDATE kategori SET nama_kategori='$nama_kategori' WHERE id_ktegori='$id_ktegori'");
        header("location:kategori1.php");
    }
    ?>

    <form action="" method=POST>
    <table>
        <tr>
            <td width="130">ID kategori     :</td>
            <td><input name=id_ktegori value=<?php echo $kolom['id_ktegori'];?> ></td></br>
        </tr>
        <tr>
            <td width="130">Nama Kategori   :</td>
            <td><input name=nama_kategori value=<?php echo $kolom['nama_kategori'];?> ></td>
        </tr>
        <tr>
            <td></td>
            <td><input type=submit name=edit value=simpan onclick="alert('Data telah diubah')"><input type="reset"></td>
        </tr>
    </table></br></br></br></br>
    </form>
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