<?php

require_once '../helper/connection.php';

$result = mysqli_query($con, "SELECT * FROM hotel");
$row = mysqli_fetch_array($result);

$id_hotel = $_POST['id_hotel'];
$nama_hotel = $_POST['nama_hotel'];
$deskripsi = $_POST['deskripsi'];
$alamat = $_POST['alamat'];
$gmaps = $_POST['gmaps'];
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
		$moved = move_uploaded_file($file_tmp, '../assets/img/hotel/' . $nama_gambar_baru);
		if ($moved) {
			unlink('../assets/img/hotel/' . $row['foto']);
		} else {
			$nama_gambar_baru = $row['foto'];
		}

		$query = "UPDATE hotel SET nama_hotel = '$nama_hotel', deskripsi= '$deskripsi', alamat= '$alamat', gmaps= '$gmaps', foto = '$nama_gambar_baru' ";
		$query .= "WHERE id_hotel = '$id_hotel'";
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
	$query = "UPDATE hotel SET nama_hotel = '$nama_hotel', deskripsi= '$deskripsi', alamat= '$alamat', gmaps= '$gmaps'";
	$query .= "WHERE id_hotel = '$id_hotel'";
	$result = mysqli_query($con, $query);

	if (!$result) {
		die("Query Error : " . mysqli_errno($con) . " - " . mysqli_error($con));
	} else {
		echo "<script>alert('Data berhasil diupdate!');window.location.href='index.php';</script>";
	}
}