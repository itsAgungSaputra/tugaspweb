<?php
session_start();
if (!isset($_SESSION['nama'])) {
    echo "<script>alert('Harap login terlebih dahulu!!!');window.location.href='../login.php'</script>";
}

require_once '../helper/connection.php';

$id_hotel = $_GET['id_hotel'];
$result = mysqli_query($con, "SELECT * FROM hotel WHERE id_hotel = '$id_hotel'");
$row = mysqli_fetch_array($result);
?>

<?php require_once '../layouts/header.php'; ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Hotel</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Hotel "<?= $row['nama_hotel'] ?>"</h6>
    </div>
    <div class="card-body">
        <form action="update.php" method="POST" enctype="multipart/form-data">
            <a class="btn btn-secondary btn-sm mb-4" href="index.php"><i class="fas fa-arrow-left"></i> Kembali</a>
            <div class="row">
                <div class="col-auto">
                    <img id="foto" width="250px" src="../assets/img/hotel/<?= $row['foto']; ?>" alt="">
                </div>
                <div class="col">
                    <div class="form-group" style="display: none;">
                        <input type="text" name="id_hotel" class="form-control" id="id_hotel" value="<?= $row['id_hotel'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="nama_hotel"><strong>Nama Hotel</strong></label>
                        <input type="text" name="nama_hotel" class="form-control" id="nama_hotel" value="<?= $row['nama_hotel'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi"><strong>Deskripsi</strong></label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"><?= $row['deskripsi']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="alamat"><strong>Alamat</strong></label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $row['alamat']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="gmaps"><strong>GMaps</strong></label>
                        <textarea class="form-control" id="gmaps" name="gmaps" rows="3"><?= $row['gmaps']; ?></textarea>
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