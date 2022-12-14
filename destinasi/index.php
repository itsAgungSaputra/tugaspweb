<?php
session_start();
if (!isset($_SESSION['nama'])) {
    echo "<script>alert('Harap login terlebih dahulu!!!');window.location.href='../login.php'</script>";
}

require_once '../helper/connection.php';

$result = mysqli_query($con, "SELECT destinasi.*,kabkot.nama_kabkot FROM destinasi JOIN kabkot ON destinasi.id_kabkot=kabkot.id_kabkot");
?>

<?php require_once '../layouts/header.php'; ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Destinasi</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a class="btn btn-primary btn-sm" href="create.php" style="float: right;">
            <i class="fas fa-plus"></i> Tambah Data
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th style="width: 450px">Deskripsi</th>
                        <th>Alamat</th>
                        <th>GMaps</th>
                        <th>Foto</th>
                        <th>Kabupaten/Kota</th>
                        <th style="width: 100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    while ($data = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['nama_destinasi']; ?></td>
                            <td style="width: 450px"><?= $data['deskripsi']; ?></td>
                            <td><?= $data['alamat']; ?></td>
                            <td><?= $data['gmaps']; ?></td>
                            <td>
                                <img width="100px" src="../assets/img/destinasi/<?= $data['foto']; ?>">
                            </td>
                            <td><?= $data['nama_kabkot']; ?></td>
                            <td style="width: 100px">
                                <a class="btn btn-warning btn-sm rounded-circle" href="edit.php?id_destinasi=<?php echo $data['id_destinasi']; ?>"><i class="fas fa-edit"></i></a>
                                <a class="btn btn-danger btn-sm rounded-circle" href="delete.php?id_destinasi=<?php echo $data['id_destinasi']; ?>" onclick="return confirm('Ingin Menghapus Data Ini?')"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php require_once '../layouts/footer.php'; ?>