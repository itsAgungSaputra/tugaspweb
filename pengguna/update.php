<?php
	require_once '../helper/connection.php';

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];

	$select = mysqli_query($con,"SELECT * FROM pengguna where id ='$id' ");
	$cek = mysqli_num_rows($select);
	
	if($cek > 0){
		$update = mysqli_query($con,"UPDATE pengguna SET nama='$nama', username='$username' WHERE id = '$id' ");
		if($update){
			echo "<script>alert('Berhasil Mengupdate Data'); window.location.href='index.php' </script>";
		}else{
			echo "<script>alert('Gagal Mengupdate Data'); window.location.href='edit.php' </script>";
		}
	}else{
		echo "<script>alert('Data Tidak Ditemukan'); window.location.href='edit.php' </script>";
	}

?>