<?php
session_start();
if (!isset($_SESSION['nama'])) {
    echo "<script>alert('Harap login terlebih dahulu!!!');window.location.href='../login.php'</script>";
}

require_once '../helper/connection.php';

$result = mysqli_query($con, "SELECT * FROM hotel");
?>

<?php require_once '../layouts/header.php'; ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Hotel</h1>

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
                        <th>Nama Hotel</th>
                        <th>Deskripsi</th>
                        <th>Alamat</th>
                        <th>GMaps</th>
                        <th>Foto</th>
                        <th style="width: 100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row['nama_hotel']; ?></td>
                            <td><?= $row['deskripsi']; ?></td>
                            <td><?= $row['alamat']; ?></td>
                            <td><?= $row['gmaps']; ?></td>
                            <td>
                                <img width="100px" src="../assets/img/hotel/<?= $row['foto']; ?>">
                            </td>
                            <td>
                                <a class="btn btn-warning btn-sm rounded-circle" href="edit.php?id_hotel=<?php echo $row['id_hotel']; ?>"><i class="fas fa-edit"></i></a>
                                <a class="btn btn-danger btn-sm rounded-circle" href="delete.php?id_hotel=<?php echo $row['id_hotel']; ?>" onclick="return confirm('Ingin Menghapus Data Ini?')"><i class="fas fa-trash"></i></a>
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