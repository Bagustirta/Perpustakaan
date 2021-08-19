<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';

if(isset($_POST['login'])) {

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login1 = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' ");
$login2 = mysqli_query($koneksi, "SELECT * FROM petugas WHERE username='$username'");
$login3 = mysqli_query($koneksi, "SELECT * FROM siswa WHERE username='$username'");
// $login = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username' and password='$password'");
// menghitung jumlah data yang ditemukan
// $cek = mysqli_num_rows($login);
 
    $row = mysqli_fetch_assoc($login3);

    if(mysqli_num_rows($login1) === 1 ){
        $_SESSION['username'] = $username;
		$_SESSION['level1'] = "admin";
        if( isset($_POST['remember'] ) ) {
            //buat cookie
            setcookie('login1', 'true', time() + 3600);
        }
        header("location:halaman_admin.php");

    } else if(mysqli_num_rows($login2) === 1 ){
        $_SESSION['username'] = $username;
		$_SESSION['level2'] = "petugas";
        if( isset($_POST['remember'] ) ) {
            //buat cookie
            setcookie('login2', 'true', time() + 3600);
        }
        header("location:halaman_petugas.php");

    } else if(mysqli_num_rows($login3) === 1 ){
        $_SESSION['username'] = $username;
		$_SESSION['level3'] = "siswa";
        if( isset($_POST['remember'] ) ) {
            //buat cookie
            setcookie('login3', 'true', time() + 3600);
        }
        header("location:halaman_siswa.php");
    
    }else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

?>