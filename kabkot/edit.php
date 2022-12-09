<?php
session_start();
if (!isset($_SESSION['nama'])) {
    echo "<script>alert('Harap login terlebih dahulu!!!');window.location.href='../login.php'</script>";
}

require_once '../helper/connection.php';

$id_kabkot = $_GET['id_kabkot'];
$result = mysqli_query($con, "SELECT * FROM kabkot WHERE id_kabkot = '$id_kabkot'");
$row = mysqli_fetch_array($result);
?>

<?php require_once '../layouts/header.php'; ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Kabupaten/Kota</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Kabupaten/Kota</h6>
    </div>
    <div class="card-body">
        <form action="update.php" method="POST" enctype="multipart/form-data">
            <a class="btn btn-secondary btn-sm mb-4" href="index.php"><i class="fas fa-arrow-left"></i> Kembali</a>
            <!-- <div class="form-group row" style="display: none;">
                <label for="id_kabkot" class="col-sm-2 form-label"><strong>Id Kabkot</strong></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_kabkot" id="id_kabkot" value="">
                </div>
            </div> -->
            <div class="row">
                <div class="col-auto">
                    <img id="foto" width="250px" src="../assets/img/kabkot/<?= $row['foto']; ?>" alt="">
                </div>
                <div class="col">
                    <div class="form-group" style="display: none;">
                        <input type="text" name="id_kabkot" class="form-control" id="id_kabkot" value="<?= $row['id_kabkot'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="nama_kabkot"><strong>Nama Kabupaten/Kota</strong></label>
                        <input type="text" name="nama_kabkot" class="form-control" id="nama_kabkot" value="<?= $row['nama_kabkot'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi"><strong>Deskripsi</strong></label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"><?= $row['deskripsi']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="foto"><strong>Foto</strong></label>
                        <input type="file" onchange="ubahgambar(event)" name="foto" id="foto" class="form-control-file" accept=" .jpg, .jpeg, .png">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-sm float-right" onclick="return confirm('Apakah Anda Yakin Ingin Mengupdate Data Ini?')"><i class="fas fa-plus"></i> Update</button>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script>
    var ubahgambar = function(event) {
        var foto = document.getElementById('foto');
        foto.src = URL.createObjectURL(event.target.files[0]);
        foto.onload = function() {
            URL.revokeObjectURL(foto.src)
        }
    }
</script>
<?php require_once '../layouts/footer.php'; ?>