<?php

    require_once '../helper/connection.php';

    $result = mysqli_query($con, "SELECT * FROM kabkot");
    $row = mysqli_fetch_array($result);

    $id_kabkot = $_GET['id_kabkot'];

    unlink('../assets/img/kabkot/' . $row['foto']);

    $query = "DELETE FROM kabkot WHERE id_kabkot='$id_kabkot'";
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
