<?php
require_once 'helper/connection.php';

$id = $_GET['id_hotel'];
$sql_hotel = "SELECT * FROM hotel WHERE id_hotel = $id";

$all_hotel = $con->query($sql_hotel);
// $result = mysqli_query($con, "SELECT * FROM hotel WHERE id_hotel = '$id_hotel'");
$row_hotel = mysqli_fetch_assoc($all_hotel);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pesona Gorontalo</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center ">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <a href="index.php"><img src="assets/img/logo/logo2.png" width="220px" alt="" class="img-fluid"></a>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a <?php if ($_SERVER['PHP_SELF'] == "/webwisata/index.php") { ?> class="active" <?php } ?> href="index.php">Home</a></li>
                    <li><a <?php if ($_SERVER['PHP_SELF'] == "/webwisata/destinasi.php") { ?> class="active" <?php } ?> href="destinasi.php">Destinasi</a></li>
                    <li><a <?php if ($_SERVER['PHP_SELF'] == "/webwisata/kuliner.php") { ?> class="active" <?php } ?> href="kuliner.php">Kuliner</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Our Services Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2 style="font-size: 45px;"><?= $row_hotel['nama_hotel']; ?></h2>
                </div>

            </div>
        </section><!-- End Our Services Section -->

        <!-- ======= Services Section ======= -->


        <!-- ======= Service Details Section ======= -->
        <section class="service-details">
            <div class="container">

                <div class="row pb-4" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src="assets/img/hotel/<?= $row_hotel['foto']; ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7">
                        <p>
                            <?= $row_hotel['deskripsi']; ?>
                        </p>
                        <div class="read-more" style="color: #767676;">
                            <a href="<?= $row_hotel['gmaps']; ?>">
                                <i class="bi bi-geo-alt"></i> <?= $row_hotel['alamat']; ?>
                            </a>
                        </div>
                    </div>
                    <!-- <div class="col-md-12 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="card">
                            <div class="card-img align-center">
                                <img src="assets/img/hotel/" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="#"></a></h5>
                                <p class="card-text"></p>
                                <div class="read-more"><a href="https://www.google.com/maps/place/Jl.+Sutoyo,+Biawao,+Kota+Sel.,+Kota+Gorontalo,+Gorontalo/@0.5350561,123.0595273,17z/data=!3m1!4b1!4m5!3m4!1s0x32792ade8a89d7f1:0x2e661bea63b0a8ae!8m2!3d0.5350561!4d123.0595273"><i class="bi bi-arrow-right"></i> Jl. Sutoyo, Biawao, Kota Sel., Kota Gorontalo, Gorontalo, Indonesia</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <?php
                    ?>
                </div>

            </div>
        </section>

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Kelompok PWEB</span></strong>
                </div>
                <div class="credits">
                    Created by <a href="https://www.instagram.com/agungsaputragram/">Agung Saputra</a>
                </div>
            </div>
        </footer><!-- End Footer -->
        <!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

</body>

</html>