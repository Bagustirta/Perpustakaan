<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
</head>
<body>
		<nav class="uk-navbar uk-navbar-container uk-margin">

			<div class="uk-navbar-center">
				<img src="logo.png" alt="" width="55px" ><h3 class="uk-align-center uk-padding">SMK NEGERI 1 DENPASAR</h3></img>
			</div>

			<div class="uk-navbar-item uk-navbar-right">
								
				</div>

		</nav>
 
	<?php 
	include ("koneksi.php");

	if(isset($_COOKIE['login1'])){
		

		if( $_COOKIE['login1'] == true) {
			$_SESSION['level1'] = true;
		}


	}

	if( isset($_SESSION['level1'])){
		header("location: halaman_admin.php");
	}


	if(isset($_COOKIE['login2'])){
		

		if( $_COOKIE['login2'] == true) {
			$_SESSION['level2'] = true;
		}


	}

	if( isset($_SESSION['level2'])){
		header("location: halaman_petugas.php");
	}


	if(isset($_COOKIE['login3'])){
		

		if( $_COOKIE['login3'] == true) {
			$_SESSION['level3'] = true;
		}


	}

	if( isset($_SESSION['level3'])){
		header("location: halaman_siswa.php");
	}
	


	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='uk-alert-danger uk-padding-small uk-text-center uk-h4'>Username dan Password tidak sesuai !</div>";
		} 
	}
	?>
 
 	<div class="uk-container uk-padding">

		<h2>Silahkan Login</h2>
			<ul class="uk-nav uk-nav-default">
				<li class="uk-nav-divider"></li>
			</ul>
		<h4>Masukan Username anggota serta Password yang diberikan oleh administrator sistem perpustakaan. Jika Anda anggota perpustakaan namun lupa dengan passwordnya, hubungi staf perpustakaan.</h4>
		
		<form action="cek_login.php" method="POST">

			<label for="username" class="uk-h4 uk-text-bold">Username</label>			
				<div class="uk-margin">
					<input class="uk-input uk-form-width-large" type="text" id="username" name="username" placeholder="Username .." required="required">
				</div>
 
			<label for="password" class="uk-h4 uk-text-bold">Password</label>
				<div class="uk-margin">
					<input class="uk-input uk-form-width-large"  type="password" id="password" name="password" placeholder="Password .." required="required">
				</div>
		
				<input type="checkbox" id="remember" name="remember" placeholder="Username .." >
				<label for="remember" class="uk-h4 uk-text-bold">Remember me</label>	
<br>
<br>
			<button class="uk-button uk-button-primary uk-text-bold" type="submit" name="login" value="login">LOGIN</button>
			<p class="uk-h4">Belum punya akun? <a href="register.php">Register</a></p>

	
		</form>
	</div>
		
	</div>
 
 
</body>
</html>