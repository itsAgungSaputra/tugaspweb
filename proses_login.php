<?php

require_once 'helper/connection.php';
if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = mysqli_query($con, "SELECT * FROM pengguna WHERE username='$username' AND password='$password' LIMIT 1");
    $select = mysqli_fetch_array($sql);
    $row = mysqli_num_rows($sql);

    if ($row) {
        session_start();
        $_SESSION['nama'] = $select['nama'];
        $_SESSION['login'] = $row;
        echo "<script>alert('Anda berhasil login');window.location.href='home.php'</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan saat anda login');window.location.href='login.php'</script>";
    }
    
}
