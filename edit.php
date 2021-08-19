<?php 

include("koneksi.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: tabel_siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM siswa WHERE id=$id";
$query = mysqli_query($koneksi, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit Siswa</title>
	<link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
</head>

<body>

<nav class="uk-navbar uk-navbar-container uk-margin">

<div class="uk-navbar-center">
    <img src="logo.png" alt="" width="55px" ><h3 class="uk-text-bold uk-align-center ">SMK NEGERI 1 DENPASAR</h3></img>
</div>

</nav>


<div class="uk-container uk-padding">
        <h3 class="uk-text-center">Edit Siswa</h3>
        <form class="uk-form-horizontal uk-margin-large" action="proses_edit.php" method="post">

        <input class="uk-input" name="id" id="form-horizontal-text id" value="<?php echo $siswa['id'] ?>" type="hidden" >

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text nama">NIS</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="nis" id="form-horizontal-text nis" value="<?php echo $siswa['nis'] ?>" type="text" placeholder="Masukkan NIS...">
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text nama">Nama</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="nama" id="form-horizontal-text nama" value="<?php echo $siswa['nama'] ?>" type="text" placeholder="Masukkan Nama...">
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text username">Username</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="username" id="form-horizontal-text username" value="<?php echo $siswa['username'] ?>" type="text" placeholder="Masukkan Username...">
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text password">Password</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="password" id="form-horizontal-text password" value="<?php echo $siswa['password'] ?>" type="password" placeholder="Masukkan Password...">
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="">Jabatan</label>
                <div class="uk-form-controls">
                <select class="uk-select" name="level" id="form-horizontal-text level">
                    <option>siswa</option>
                </select>
                </div>
            </div>

			<p>
			<input class="uk-align-center  uk-button uk-button-primary" type="submit" value="Simpan" name="simpan" />
		</p>
        </form>

  
</div>






	</body>
</html>
