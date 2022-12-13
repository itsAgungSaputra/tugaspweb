<?php

require_once '../helper/connection.php';

$result = mysqli_query($con, "SELECT * FROM kuliner");
$row = mysqli_fetch_array($result);

$id = $_POST['id'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$alamat = $_POST['alamat'];
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
		$moved = move_uploaded_file($file_tmp, '../assets/img/kuliner/' . $nama_gambar_baru);
		if ($moved) {
			unlink('../assets/img/kuliner/' . $row['foto']);
		} else {
			$nama_gambar_baru = $row['foto'];
		}

		$query = "UPDATE kuliner SET nama = '$nama', deskripsi= '$deskripsi', foto = '$nama_gambar_baru' ";
		$query .= "WHERE id = '$id'";
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
	$query = "UPDATE kuliner SET nama = '$nama', deskripsi= '$deskripsi' ";
	$query .= "WHERE id = '$id'";
	$result = mysqli_query($con, $query);

	if (!$result) {
		die("Query Error : " . mysqli_errno($con) . " - " . mysqli_error($con));
	} else {
		echo "<script>alert('Data berhasil diupdate!');window.location.href='index.php';</script>";
	}
}