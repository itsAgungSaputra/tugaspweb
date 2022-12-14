<?php
session_start();
if (!isset($_SESSION['nama'])) {
    echo "<script>alert('Harap login terlebih dahulu!!!');window.location.href='../login.php'</script>";
}

require_once '../helper/connection.php';

$result = mysqli_query($con, "SELECT * FROM kabkot");
?>

<?php require_once '../layouts/header.php'; ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Destinasi</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Destinasi</h6>
    </div>
    <div class="card-body">
        <form action="store.php" method="POST" enctype="multipart/form-data">
            <a class="btn btn-secondary btn-sm mb-4" href="index.php"><i class="fas fa-arrow-left"></i> Kembali</a>
            <div class="form-group row">
                <label for="nama_destinasi" class="col-sm-2 form-label"><strong>Nama Destinasi</strong></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_destinasi" id="nama_destinasi" autofocus required>
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-2 form-label"><strong>Deskripsi</strong></label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 form-label"><strong>Alamat</strong></label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="gmaps" class="col-sm-2 form-label"><strong>GMaps</strong></label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="gmaps" name="gmaps" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="foto" class="col-sm-2 form-label"><strong>Foto</strong></label>
                <div class="col-sm-10">
                    <input type="file" name="foto" class="form-control-file" id="foto" accept=".jpg, .jpeg, .png">

                </div>
            </div>
            <div class="form-group row">
                <label for="id_kabkot" class="col-sm-2 form-label"><strong>Kabupaten/Kota</strong></label>
                <div class="col-sm-10">
                    <select id class="custom-select" name="id_kabkot">
                        <option selected>Kabupaten/Kota</option>
                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <option value="<?php echo $row['id_kabkot']; ?>"><?php echo $row['nama_kabkot']; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm float-right" onclick="return confirm('Apakah Anda Yakin Ingin Menambahkan Data Ini?')"><i class="fas fa-plus"></i> Tambah</button>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php require_once '../layouts/footer.php'; ?>