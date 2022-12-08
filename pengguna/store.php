<?php
	
	include "koneksi.php";

	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$insert = mysqli_query($con,"INSERT INTO pengguna (nama,username,password) VALUES ('$nama','$username','$password') ");
	if($insert){
		echo "<script>alert('Berhasil Menambah Data');window.location.href='pengguna.php';</script>";
	}else{
		echo "<script>alert('Gagal Menambah Data');window.location.href='tambah.php';</script>";
	}
?>
