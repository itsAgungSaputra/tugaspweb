<?php 

    require_once 'helper/connection.php';

    $id = $_GET['id'];

    $select = mysqli_query($con, "SELECT * FROM pengguna WHERE id='$id'");
    $cek = mysqli_num_rows($select);
    if($cek > 0) {
        $delete = mysqli_query($con, "DELETE FROM pengguna WHERE id='$id'");
        if($delete) {
            echo "
                <script>
                    alert('Berhasil Menghapus Data');window.location.href='pengguna.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Gagal Menghapus Data');window.location.href='pengguna.php';
                </script>
            ";
        }
    }else {
        echo "
                <script>
                    alert('User Tidak Ditemukan');window.location.href='pengguna.php';
                </script>
            ";
    }

?>