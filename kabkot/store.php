<?php

require_once '../helper/connection.php';

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

	if (in_array($ekstensi, $ekstensi_diperbolehkan)) {
		move_uploaded_file($file_tmp, '../assets/img/kabkot/' . $nama_gambar_baru);

		$query = "INSERT INTO kabkot (nama_kabkot, deskripsi, foto) VALUES ('$nama_kabkot', '$deskripsi', '$nama_gambar_baru')";
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
	$query = "INSERT INTO kabkot (nama_kabkot, deskripsi) VALUES ('$nama_kabkot', '$deskripsi')";
	$result = mysqli_query($con, $query);

	if (!$result) {
		die("Query Error : " . mysqli_errno($con) . " - " . mysqli_error($con));
	} else {
		echo "<script>alert('Data berhasil ditambahkan!');window.location.href='index.php';</script>";
	}
}
