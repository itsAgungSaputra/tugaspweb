<?php

require_once '../helper/connection.php';

$result = mysqli_query($con, "SELECT * FROM destinasi");
$row = mysqli_fetch_array($result);

$id_destinasi = $_POST['id_destinasi'];
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

	if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
		$moved = move_uploaded_file($file_tmp, '../assets/img/destinasi/' . $nama_gambar_baru);
		if ($moved) {
			unlink('../assets/img/destinasi/' . $row['foto']);
		} else {
			$nama_gambar_baru = $row['foto'];
		}

		$query = "UPDATE destinasi SET nama_destinasi = '$nama_destinasi', deskripsi= '$deskripsi', alamat= '$alamat', gmaps = '$gmaps', foto = '$nama_gambar_baru', id_kabkot= '$id_kabkot' ";
		$query .= "WHERE id_destinasi = '$id_destinasi'";
		$result = mysqli_query($con, $query);

		if (!$result) {
			die("Query Error : " . mysqli_errno($con) . " - " . mysqli_error($con));
		} else {
			echo "<script>alert('Data berhasil diupdate!');window.location.href='index.php';</script>";
		}
	} else {
		echo "<script>alert('Ekstensi gambar hanya bisa jpg, jpeg, dan png!');window.location.href='edit.php';</script>";
	}
} else {
	$query = "UPDATE destinasi SET nama_destinasi = '$nama_destinasi', deskripsi= '$deskripsi', alamat= '$alamat', gmaps = '$gmaps', id_kabkot= '$id_kabkot' ";
	$query .= "WHERE id_destinasi = '$id_destinasi'";
	$result = mysqli_query($con, $query);

	if (!$result) {
		die("Query Error : " . mysqli_errno($con) . " - " . mysqli_error($con));
	} else {
		echo "<script>alert('Data berhasil diupdate!');window.location.href='index.php';</script>";
	}
}