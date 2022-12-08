<?php
require_once 'helper/connection.php';

$id_hotel = $_GET['id_hotel'];
$result = mysqli_query($con, "SELECT * FROM hotel WHERE id_hotel = '$id_hotel'");
$row = mysqli_fetch_array($result);
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
                    <li><a class="active " href="index.php">Home</a></li>
                    <li><a href="portfolio.php">Galeri Wisata</a></li>
                    <li><a href="team.php">Kuliner</a></li>

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
                    <h2><?= $row['nama_hotel']; ?></h2>
                    <ol>
                        <li>Destinasi Wisata Di <?= $row['nama_hotel']; ?></li>
                    </ol>
                </div>

            </div>
        </section><!-- End Our Services Section -->

        <!-- ======= Services Section ======= -->


        <!-- ======= Service Details Section ======= -->
        <section class="service-details">
            <div class="container">

                <div class="row">
                    <?php
                    $i = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                            <div class="card">
                                <div class="card-img">
                                    <img src="assets/img/hotel/<?= $row['foto']; ?>" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#"><?= $row['nama_hotel']; ?></a></h5>
                                    <p class="card-text"><?= $row['deskripsi']; ?></p>
                                    <div class="read-more"><a href="https://www.google.com/maps/place/Jl.+Sutoyo,+Biawao,+Kota+Sel.,+Kota+Gorontalo,+Gorontalo/@0.5350561,123.0595273,17z/data=!3m1!4b1!4m5!3m4!1s0x32792ade8a89d7f1:0x2e661bea63b0a8ae!8m2!3d0.5350561!4d123.0595273"><i class="bi bi-arrow-right"></i> Jl. Sutoyo, Biawao, Kota Sel., Kota Gorontalo, Gorontalo, Indonesia</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        $i++;
                    }
                    ?>
                </div>

            </div>
        </section>

        <!-- ======= Footer ======= -->
        <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">



            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Kelompok PWEB</span></strong>
                </div>
                <div class="credits">
                    Designed by <a href="https://www.instagram.com/artajgmn/?next=%2F&hl=id">Uta Ganteng</a>
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