<?php

require_once '../helper/connection.php';

$result = mysqli_query($con, "SELECT * FROM kabkot");
$row = mysqli_fetch_array($result);

$id_kabkot = $_POST['id_kabkot'];
$nama_kabkot = $_POST['nama_kabkot'];
$deskripsi = $_POST['deskripsi'];
$foto = $_FILES["foto"]["name"];

if ($foto != "") {
	$ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
	$x = explode('.', $foto);
	$ekstensi = strtolower(end($x));
	$file_tmp = $_FILES['foto']['tmp_name'];
	$nama_gambar_baru = time() . $foto;
	// $angka_acak = rand(1, 999);
	// $nama_gambar_baru = $angka_acak . '-' . $foto;

	if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
		$moved = move_uploaded_file($file_tmp, '../assets/img/kabkot/' . $nama_gambar_baru);
		if ($moved) {
			unlink('../assets/img/kabkot/' . $row['foto']);
		} else {
			$nama_gambar_baru = $row['foto'];
		}

		$query = "UPDATE kabkot SET nama_kabkot = '$nama_kabkot', deskripsi= '$deskripsi', foto = '$nama_gambar_baru' ";
		$query .= "WHERE id_kabkot = '$id_kabkot'";
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
	$query = "UPDATE kabkot SET nama_kabkot = '$nama_kabkot', deskripsi= '$deskripsi' ";
	$query .= "WHERE id_kabkot = '$id_kabkot'";
	$result = mysqli_query($con, $query);

	if (!$result) {
		die("Query Error : " . mysqli_errno($con) . " - " . mysqli_error($con));
	} else {
		echo "<script>alert('Data berhasil diupdate!');window.location.href='index.php';</script>";
	}
}