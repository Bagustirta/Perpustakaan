<!DOCTYPE html>
<html>
<head>
	<title>Halaman Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		} 
	}
	?>
 
 	<div class="uk-container uk-padding">

		<h2>Silahkan Register</h2>
			<ul class="uk-nav uk-nav-default">
				<li class="uk-nav-divider"></li>
			</ul>
		<h4>Masukan Username anggota serta Password yang diberikan oleh administrator sistem perpustakaan. Jika Anda anggota perpustakaan namun lupa dengan passwordnya, hubungi staf perpustakaan.</h4>
		
		<form action="tambah_aksi.php" method="POST">

            <label class="uk-h4 uk-text-bold">NIS</label>			
				<div class="uk-margin">
					<input class="uk-input uk-form-width-large" type="text" name="nis" placeholder="NIS .." required="required">
				</div>
 
            <label class="uk-h4 uk-text-bold">Nama</label>			
				<div class="uk-margin">
					<input class="uk-input uk-form-width-large" type="text" name="nama" placeholder="Nama .." required="required">
				</div>
 

			<label class="uk-h4 uk-text-bold">Username</label>			
				<div class="uk-margin">
					<input class="uk-input uk-form-width-large" type="text" name="username" placeholder="Username .." required="required">
				</div>
 
			<label class="uk-h4 uk-text-bold">Password</label>
				<div class="uk-margin">
					<input class="uk-input uk-form-width-large" type="password" name="password" placeholder="Password .." required="required">
				</div>

				<div class="uk-margin">
					<select class="uk-select uk-form-width-large" name="level" id="form-horizontal-text level">
						<option>siswa</option>
					</select>
				</div>

			<button class="uk-button uk-button-primary uk-text-bold" type="submit" value="SIMPAN">REGISTER</button>
			<p class="uk-h4">Sudah punya akun? <a href="index.php">Login</a></p>

	
		</form>
	</div>
		
	</div>
 
 
</body>
</html>