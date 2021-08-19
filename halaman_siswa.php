<!DOCTYPE html>
<html>
<head>
	<title>Halaman Siswa</title>
	<link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
</head>
<body>

<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level3']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>

<nav class="uk-navbar uk-navbar-container uk-margin">

    <div class="uk-navbar-left">
		<a class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle width="30"  href="#offcanvas-push"></a>
		<div id="offcanvas-push"  uk-offcanvas="mode: push; overlay: true">
			<div class="uk-offcanvas-bar">

				<ul class="uk-nav uk-nav-default">
					<li class="uk-h3"><span class="uk-margin-small-right" uk-icon="icon: menu" width="25"></span>Menu</li>
					<li class="uk-nav-divider"></li>
					<li ><a href="#" class="uk-h3"><span class="uk-margin-small-right" uk-icon="icon: home"></span>Beranda</a></li>
					<li><a href="#" class="uk-h3"><span class="uk-margin-small-right" uk-icon="icon: info"></span>Informasi</a></li>
				</ul>

			</div>
		</div>
    </div>

	<div class="uk-navbar-center">
		<img src="logo.png" alt="" width="55px" ><h3 class="uk-text-bold uk-align-center uk-padding">SMK NEGERI 1 DENPASAR</h3></img>
	</div>

	<div class="uk-navbar-item uk-navbar-right">
           
	<a href="logout.php"><button class="uk-button uk-button-danger uk-text-bold"><span class="uk-margin-small-right" uk-icon="icon: sign-out"></span>Log Out</button></a>
          
        </div>

</nav>

<h2 class="uk-padding-small">Selamat Datang <b><?php echo $_SESSION['username']; ?></b>.</h2>

	<h3 class="uk-text-center uk-padding">Pilih Subjek Yang Menarik Bagi Anda</h3>
<div class="uk-container">
	<ul class="uk-child-width-1-5@s  uk-flex" uk-grid>
		<li>
			<a href="kesusastraan2.php" class="uk-text-center uk-card uk-card-default uk-flex uk-flex-column">
				<img class="uk-align-center" src="8-books.png" width="110"></img>
				<p>Kesusastraan</p>
			</a>
		</li>
		
		<li>
			<a href="kesusastraan2.php" class="uk-text-center uk-card uk-card-default uk-flex uk-flex-column">
				<img class="uk-align-center" src="3-diploma.png" width="110"></img>
				<p>Ilmu-Ilmu Sosial</p>
			</a>
		</li>

		<li>
			<a href="kesusastraan2.php" class="uk-text-center uk-card uk-card-default uk-flex uk-flex-column">
				<img class="uk-align-center" src="6-blackboard.png" width="110"></img>
				<p>Ilmu-Ilmu Terapan</p>
			</a>
		</li>

		<li>
			<a href="kesusastraan2.php" class="uk-text-center uk-card uk-card-default uk-flex uk-flex-column">
				<img class="uk-align-center" src="7-quill.png" width="110"></img>
				<p>Kesenian, Hiburan, Dan Olahraga</p>
			</a>
		</li>

		<li>
			<a href="" class="uk-text-center uk-card uk-card-default uk-flex uk-flex-column">
				<img class="uk-align-center" src="grid_icon.png" width="110"></img>
				<p>Lihat Lainnya</p>
				
			</a>
		</li>
	</ul>
</div>

	
</body>
</html>