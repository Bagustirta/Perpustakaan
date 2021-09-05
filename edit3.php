<?php 

include("koneksi.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: crud_buku.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM buku WHERE id=$id";
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
	<title>Edit Buku</title>
	<link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
</head>

<body>

<nav class="uk-navbar uk-navbar-container uk-margin">

<div class="uk-navbar-center">
    <img src="logo.png" alt="" width="55px" ><h3 class="uk-text-bold uk-align-center">SMK NEGERI 1 DENPASAR</h3></img>
</div>

</nav>

<div class="uk-container uk-padding">
        <h3 class="uk-text-center">Edit Buku</h3>
        <form class="uk-form-horizontal uk-margin-large" action="proses_edit3.php" method="post">

        <input class="uk-input" name="id" id="form-horizontal-text id" value="<?php echo $siswa['id'] ?>" type="hidden" >

        <div class="uk-margin" uk-margin>
            <label class="uk-form-label" for="form-horizontal-text foto">Foto</label>
            <input class="uk-input uk-form-width-medium"  name="foto" id="foto" value="<?php echo $siswa['foto'] ?>" type="file" placeholder="Select file" >
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text judul">Judul</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="judul" id="form-horizontal-text judul" value="<?php echo $siswa['judul']; ?>" type="text" placeholder="Masukkan Judul Buku...">
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text tempat_terbit">Tempat Terbit</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="tempat_terbit" id="form-horizontal-text tempat_terbit" value="<?php echo $siswa['tempat_terbit']; ?>" type="text" placeholder="Masukkan Tempat Terbit...">
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text tahun_terbit">Tahun Terbit</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="tahun_terbit" id="form-horizontal-text tahun_terbit" value="<?php echo $siswa['tahun_terbit']; ?>" type="text" placeholder="Masukkan Tahun Terbit...">
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text tahun_terbit">Jumlah Buku</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="jumlah" id="form-horizontal-text jumlah" value="<?php echo $siswa['jumlah']; ?>" type="text" placeholder="Masukkan Tahun Terbit...">
                </div>
            </div>

			<p>
			<input class="uk-align-center  uk-button uk-button-primary" type="submit" value="Simpan" name="simpan" />
		</p>
        </form>

</div>






	</body>
</html>
