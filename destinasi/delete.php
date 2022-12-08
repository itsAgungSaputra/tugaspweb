<?php

    require_once '../helper/connection.php';

    $result = mysqli_query($con, "SELECT * FROM destinasi");
    $row = mysqli_fetch_array($result);

    $id_destinasi = $_GET['id_destinasi'];

    unlink('../assets/img/destinasi/' . $row['foto']);

    $query = "DELETE FROM destinasi WHERE id_destinasi='$id_destinasi'";
    $result = mysqli_query($con, $query);

    if (!$result) {
        die("Query Error : " . mysqli_errno($con) . " - " . mysqli_error($con));
        } else {
        echo "
            <script>
                    alert('Data berhasil dihapus');window.location.href='index.php';
            </script>
        ";
    }
?>
