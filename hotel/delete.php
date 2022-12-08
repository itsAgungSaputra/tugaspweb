<?php

    require_once '../helper/connection.php';

    $result = mysqli_query($con, "SELECT * FROM hotel");
    $row = mysqli_fetch_array($result);

    $id_hotel = $_GET['id_hotel'];

    unlink('../assets/img/hotel/' . $row['foto']);

    $query = "DELETE FROM hotel WHERE id_hotel='$id_hotel'";
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
