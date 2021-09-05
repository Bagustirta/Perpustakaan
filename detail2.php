<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
</head>
<body>
<?php 

  if(isset($_GET['id'])){
    $id   =$_GET['id'];
}
else {
    die ("Error. No ID Selected!");    
}
include "koneksi.php";
$query    =mysqli_query($koneksi, "SELECT * FROM buku WHERE id='$id'");
$siswa    =mysqli_fetch_array($query);

session_start();
	// cek apakah yang mengakses halaman ini sudah login
	if(!isset ($_SESSION['level3']) ) {
		header("location:index.php");
	}
?> 

<nav class="uk-navbar uk-navbar-container uk-margin">

<div class="uk-navbar-center">
    <img src="logo.png" alt="" width="55px" ><h3 class="uk-text-bold uk-align-center">SMK NEGERI 1 DENPASAR</h3></img>
</div>

</nav>

<div class="uk-padding uk-container">
<div uk-grid>
    <div class="uk-width-2-3@m">
        <h2 class="uk-text-bold"><?php echo $siswa['judul'] ?></h2>
    <hr>
    <h3 class="uk-text-bold">Ketersediaan</h3>
    <table class="uk-table uk-table-striped">
    <tbody>
        <tr>
            <td>Jumlah buku</td>
            <td><?php echo $siswa['jumlah'] ?></td>
            <td>
                <b style="    background-color: #5bc0de; color: white; padding: 3px;">Tersedia</b>
            </td>
        </tr>
    </tbody>
</table>

<div id="modal-center" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <h3 class="uk-text-center">Tambahkan Data</h3>
        <form class="uk-form-horizontal uk-margin-large" method="post" enctype="multipart/form-data">

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text nis">NIS</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="nis" id="form-horizontal-text nis" required="required" type="int" placeholder="Masukkan nis...">
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text nama">Nama</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="nama" id="form-horizontal-text nama" required="required" type="text" placeholder="Masukkan Nama...">
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text tahun_terbit">Tanggal Pinjam</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="tahun_terbit" id="form-horizontal-text " value="<?php echo date('d-m-Y') ?>" type="int" placeholder="Masukkan Tahun Terbit...">
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text tahun_terbit">Jumlah Buku</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="jumlah" id="form-horizontal-text jumlah" required="required" type="int" placeholder="Masukkan Tahun Terbit...">
                </div>
            </div>

            <button class="uk-align-center uk-button uk-button-primary" type="submit" value="submit" name="submit">Tambahkan</button>

        </form>

    </div>
</div>

    <form class="uk-form-horizontal" action="proses_edit3.php" method="post">

<input class="uk-input" name="id" id="form-horizontal-text id" value="<?php echo $siswa['id'] ?>" type="hidden" >
<h3 class="uk-text-bold"> Informasi Detail</h3>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text tempat_terbit">Tempat Terbit</label>
        <div class="uk-form-controls">
            <p name="tempat_terbit" id="form-horizontal-text tempat_terbit" > <?php echo $siswa['tempat_terbit']; ?></p>
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text tahun_terbit">Tahun Terbit</label>
        <div class="uk-form-controls">
            <p name="tahun_terbit" id="form-horizontal-text tahun_terbit"><?php echo $siswa['tahun_terbit']; ?></p>
        </div>
    </div>

</form>
    </div>
    <div class="uk-width-1-3@m uk-flex-first">
        <img src="<?php echo $siswa['foto']; ?>" width="250" alt="Image">
    </div>
</div>
<br>
<br>
<br>
<br>
<a href="pinjam.php?id=<?= $siswa['id'] ?>" class="uk-align-right uk-button uk-button-primary">Pinjam</a>
</div>

<br>
<br>
<br>
</div>
</body>
</html>