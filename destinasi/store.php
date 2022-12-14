<?php

require_once '../helper/connection.php';

$nama_destinasi = $_POST['nama_destinasi'];
$deskripsi = $_POST['deskripsi'];
$alamat = $_POST['alamat'];
$gmaps = $_POST['gmaps'];
$foto = $_FILES["foto"]["name"];
$id_kabkot = $_POST['id_kabkot'];

if ($foto != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    $x = explode('.', $foto);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];
    $nama_gambar_baru = time() . $foto;
    // $angka_acak = rand(1, 999);
    // $nama_gambar_baru = $angka_acak . '-' . $foto;

    if (in_array($ekstensi, $ekstensi_diperbolehkan)) {
        move_uploaded_file($file_tmp, '../assets/img/destinasi/' . $nama_gambar_baru);

        $query = "INSERT INTO destinasi (nama_destinasi, deskripsi, alamat, gmaps, foto, id_kabkot) VALUES ('$nama_destinasi', '$deskripsi', '$alamat', '$gmaps', '$nama_gambar_baru', '$id_kabkot')";
        $result = mysqli_query($con, $query);

        if (!$result) {
            die("Query Error : " . mysqli_errno($con) . " - " . mysqli_error($con));
        } else {
            echo "<script>alert('Data berhasil ditambahkan!');window.location.href='index.php';</script>";
        }
    } else {
        echo "<script>alert('Ekstensi gambar hanya bisa jpg, jpeg, dan png!');window.location.href='create.php';</script>";
    }
} else {
    $query = "INSERT INTO destinasi (nama_destinasi, deskripsi, alamat, gmaps, id_kabkot) VALUES ('$nama_destinasi', '$deskripsi', '$alamat', '$gmaps', '$id_kabkot')";
    $result = mysqli_query($con, $query);

    if (!$result) {
        die("Query Error : " . mysqli_errno($con) . " - " . mysqli_error($con));
    } else {
        echo "<script>alert('Data berhasil ditambahkan!');window.location.href='index.php';</script>";
    }
}
