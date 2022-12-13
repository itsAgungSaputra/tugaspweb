<?php

    require_once '../helper/connection.php';

    $result = mysqli_query($con, "SELECT * FROM kuliner");
    $row = mysqli_fetch_array($result);

    $id = $_GET['id'];

    unlink('../assets/img/kuliner/' . $row['foto']);

    $query = "DELETE FROM kuliner  WHERE id='$id'";
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
