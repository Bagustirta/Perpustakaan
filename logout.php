<?php 
// mengaktifkan session php
session_start();
$_SESSION =[];
session_unset();
// menghapus semua session
session_destroy();
 
setcookie('login1', 'true', time() - 3600);
setcookie('login2', 'true', time() - 3600);
setcookie('login3', 'true', time() - 3600);
// mengalihkan halaman ke halaman login
header("location:index.php");
?>