<?php 
session_start();
    if (!isset($_SESSION['nama'])) {
        echo "<script>alert('Harap login terlebih dahulu!!!');window.location.href='index.php'</script>";
    }
?>

<?php include('layouts/header.php'); ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include('layouts/sidebar.php'); ?>

        <?php include('layouts/topbar.php'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Pengguna</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Pengguna</h6>
                        </div>
                        <div class="card-body">
                            <form action="proses_edit.php" method="POST">
                                <a class="btn btn-secondary btn-sm mb-4" href="pengguna.php"><i class="fas fa-arrow-left"></i> Kembali</a>
                                <div class="form-group row">
                                    <label for="id" class="col-sm-2 form-label"><strong>Id</strong></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="id" id="id" value="<?= $_GET['id']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-2 form-label"><strong>Nama</strong></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama" id="nama" value="<?= $_GET['nama']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="username" class="col-sm-2 form-label"><strong>Username</strong></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="username" id="username" value="<?= $_GET['username']; ?>">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm float-right" onclick="return confirm('Apakah Anda Yakin Ingin Mengupdate Data Ini?')">Simpan</button>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php include('layouts/footer.php'); ?>