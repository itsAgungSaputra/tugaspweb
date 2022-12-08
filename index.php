<?php
require_once 'helper/connection.php';

$sql_kabkot = "SELECT * FROM kabkot";
$sql_hotel = "SELECT * FROM hotel";
$sql_destinasi = "SELECT * FROM destinasi";

$all_kabkot = $con->query($sql_kabkot);
$all_hotel = $con->query($sql_hotel);
$all_destinasi = $con->query($sql_destinasi);

$row_destinasi = mysqli_fetch_assoc($all_destinasi);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Wonderful Hulonthalo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo_gtlo.ico" rel="icon">
  <link href="assets/img/logo_gtlo.ico" rel="apple-touch-icon">

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

  <!-- css -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="css/my_styles.css" rel="stylesheet">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->


</head>

<body>

  <!--Header-->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <!-- <h1 class="text-light"><a href="index.php"><span>Pesona Gorontalo</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.php"><img src="assets/img/logo/logo2.png" width="220px" alt="" class="img-fluid"></a>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a <?php if($_GET['page']="/index"){ ?> class="active" <?php } ?> href="index.php">Home</a></li>
          <li><a <?php if($_GET['page']="/destinasi"){ ?> class="active" <?php } ?> href="destinasi.php">Destinasi</a></li>
          <!-- <li><a href="portfolio.php">Galeri Wisata</a></li> -->
          <!-- <li><a href="team.php">Kuliner</a></li> -->

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Wonderful <span>Hulonthalo</span></h2>
          <p class="animate__animated animate__fadeInUp">Website yang akan membantu anda dalam menemukan tempat wisata terbaik di Gorontalo</p>
          <a href="#kabkot" class="btn-get-started animate__animated animate__fadeInUp">Pelajari lebih lanjut</a>
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Kab Kota ======= -->
    <section class="features" id="kabkot">
      <div class="container">
        <div class="section-title">
          <div class="row" data-aos="fade-up">
            <h2>Kabupaten/Kota Provinsi Gorontalo</h2>
          </div>

          <?php
          $i = 0;
          while ($row = mysqli_fetch_assoc($all_kabkot)) {
          ?>
            <div class="row justify-content-center" data-aos="fade-up">
              <div class="col-md-4 <?php if ($i % 2 === 0) : ?>order-1 order-md-2<?php endif; ?>" style="<?php if ($i % 2 === 0) : ?>margin-left: 150px;<?php endif; ?>">
                <a href="kabkot_detail.php?id=<?= $row['id_kabkot']; ?>">
                  <div class="stack">
                    <img src="assets/img/kabkot/<?= $row['foto']; ?>" class="img-fluid" alt="">
                    <img src="assets/img/kabkot/<?= $row['foto']; ?>" class="img-fluid" alt="">
                    <img src="assets/img/kabkot/<?= $row['foto']; ?>" class="img-fluid" alt="">
                  </div>
                </a>
              </div>
              <div class="col-md-4 pt-4">
                <h4 class="title"><a href="kabkot_detail.php?id=<?= $row_destinasi['id_kabkot']; ?>"><?= $row['nama_kabkot']; ?></a></h4>
                <p>
                  <?= $row['deskripsi']; ?>
                </p>
              </div>
            </div>
          <?php
            $i++;
          }
          ?>
        </div>

        <div class="row" data-aos="fade-up">
          <section class="py-5" id="hotel">
            <div class="container px-5 my-5">
              <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                  <div class="text-center">
                    <div class="section-title">
                      <div class="row" data-aos="fade-up">
                      </div>
                      <h2>Hotel</h2>
                    </div>
                  </div>
                </div>
                <div class="row gx-5 justify-content-center">
                  <?php
                  $i = 0;
                  while ($row_hotel = mysqli_fetch_assoc($all_hotel)) {
                  ?>
                    <div class="col-lg-3 mb-5">
                      <div class="card h-100 shadow border-0 hotel">
                        <img class="card-img-top img-hotel" height="150px" src="assets/img/hotel/<?= $row_hotel['foto']; ?>" alt="..." />
                        <div class="card-body p-4">
                          <a class="text-decoration-none link-dark stretched-link" href="hotel_detail.php?id_hotel=<?= $row_hotel['id_hotel']; ?>">
                            <h5 class="card-title mb-3"><?= $row_hotel['nama_hotel']; ?></h5>
                          </a>
                        </div>
                      </div>
                    </div>
                  <?php
                    $i++;
                  }
                  ?>

                  <!-- <div class="col-lg-3 mb-5">
                    <div class="card h-100 shadow border-0">
                      <img class="card-img-top img-hotel" src="assets/img/hotel/amaris.jpg" alt="..." />
                      <div class="card-body p-4">
                        <a class="text-decoration-none link-dark stretched-link" href="#!">
                          <h5 class="card-title mb-3">Amaris Hotel</h5>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 mb-5">
                    <div class="card h-100 shadow border-0">
                      <img class="card-img-top img-hotel" src="assets/img/hotel/aston.jpg" alt="..." />
                      <div class="card-body p-4">
                        <a class="text-decoration-none link-dark stretched-link" href="#!">
                          <h5 class="card-title mb-3">Aston Hotel</h5>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 mb-5">
                    <div class="card h-100 shadow border-0">
                      <img class="card-img-top img-hotel" src="assets/img/hotel/damhil.jpg" alt="..." />
                      <div class="card-body p-4">
                        <a class="text-decoration-none link-dark stretched-link" href="#!">
                          <h5 class="card-title mb-3">Damhil Hotel</h5>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 mb-5">
                    <div class="card h-100 shadow border-0">
                      <img class="card-img-top img-hotel" src="assets/img/hotel/millinov.jpg" alt="..." />
                      <div class="card-body p-4">
                        <a class="text-decoration-none link-dark stretched-link" href="#!">
                          <h5 class="card-title mb-3">Millinov Hotel</h5>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 mb-5">
                    <div class="card h-100 shadow border-0">
                      <img class="card-img-top img-hotel" src="assets/img/hotel/sunrise.jpeg" alt="..." />
                      <div class="card-body p-4">
                        <a class="text-decoration-none link-dark stretched-link" href="#!">
                          <h5 class="card-title mb-3">Sunrise Hotel</h5>
                        </a>
                      </div>
                    </div>
                  </div> -->

                </div>
              </div>
          </section>
  </main>
  </section><!-- End Why Us Section -->

  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">



    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Kelompok PWEB</span></strong>
      </div>
      <div class="credits">
        Created by <a href="https://www.instagram.com/agungsaputragram/">Agung Saputra</a>
      </div>
    </div>
  </footer><!-- End Footer -->

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