<?php
session_start();
if (!isset($_SESSION['nama'])) {
    echo "<script>alert('Harap login terlebih dahulu!!!');window.location.href='../login.php'</script>";
}

require_once '../helper/connection.php';

$pengguna = mysqli_query($con, "SELECT COUNT(*) FROM pengguna");
$kabkot = mysqli_query($con, "SELECT COUNT(*) FROM kabkot");
$destinasi = mysqli_query($con, "SELECT COUNT(*) FROM destinasi");
$hotel = mysqli_query($con, "SELECT COUNT(*) FROM hotel");
$kuliner = mysqli_query($con, "SELECT COUNT(*) FROM kuliner");

$total_pengguna = mysqli_fetch_array($pengguna)[0];
$total_kabkot = mysqli_fetch_array($kabkot)[0];
$total_destinasi = mysqli_fetch_array($destinasi)[0];
$total_hotel = mysqli_fetch_array($hotel)[0];
$total_kuliner = mysqli_fetch_array($kuliner)[0];
?>

<?php require_once '../layouts/header.php'; ?>



<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Pengguna</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?= $total_pengguna ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Kabupaten/Kota</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?= $total_kabkot ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-building fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Destinasi</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?= $total_destinasi ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-plane fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-secondary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                            Hotel</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?= $total_hotel ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hotel fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-secondary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                            Kuliner</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?= $total_kuliner ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-utensils fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php require_once '../layouts/footer.php'; ?>