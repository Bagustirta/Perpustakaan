<!DOCTYPE html>
<html>
<head>
	<title>Tabel Buku</title>
    <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
</head>
<body>
<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if(!isset ($_SESSION['level1']) ) {
		header("location:index.php");
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
					<li><a href="halaman_admin.php" class="uk-h3"><span class="uk-margin-small-right" uk-icon="icon: home"></span>Beranda</a></li>
                    <li><a href="#" class="uk-h3"><span class="uk-margin-small-right" uk-icon="icon: info"></span>Informasi</a></li>
					<li><a href="tabel_petugas.php" class="uk-h3"><span class="uk-margin-small-right" uk-icon="icon: users"></span>Tabel Petugas</a></li>
                    <li><a href="tabel_siswa.php" class="uk-h3"><span class="uk-margin-small-right" uk-icon="icon: users"></span>Tabel Siswa</a></li>
                    <li><a href="#" class="uk-h3"><span class="uk-margin-small-right" uk-icon="icon:  thumbnails"></span>Kelola Buku</a></li>
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
	
<?php
include 'function.php';

$perpustakaan = query('SELECT * FROM buku');

    if( isset($_POST["submit"]) ) {

        if( tambah3($_POST) > 0 ) {
            echo "
                <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href='crud_buku.php';
                </script> ";
        } else {
            echo "
                <script>
                    alert('data gagal ditambahkan!');
                    document.location.href='crud_buku.php';
                </script> ";
        }
    }

    if(isset($_POST["cari"]) ) {
        $perpustakaan = cari($_POST["keyword"]);
    }
    else{
        $perpustakaan = query('SELECT * FROM buku');
    }
?>
<div class=" uk-container">
<div class=" uk-margin">
    <form action="" method="post">
    <a class="uk-button uk-button-primary" href="#modal-center" uk-toggle>Tambahkan User</a>
    <a class="uk-padding" href=""></a>
        <span class="uk-margin-small-right" uk-icon="icon: search"></span><input  class="uk-input uk-form-width-large " type="text" name="keyword" autofocus placeholder="Masukan Keyword Pencarian.."  autocomplete="off"> 
        <a class="uk-padding-small" href=""></a>
        <button class="uk-button uk-button-primary" type="submit" name="cari">Search</button>
    </form>
</div>



<div id="modal-center" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <h3 class="uk-text-center">Tambahkan Data</h3>
        <form class="uk-form-horizontal uk-margin-large" action="user_act.php" method="post" enctype="multipart/form-data">

            <div class="uk-margin" uk-margin>
            <label class="uk-form-label" for="form-horizontal-text foto">Foto</label>
                    <input class="uk-input uk-form-width-medium" required="required" name="foto" id="foto" type="file" placeholder="Select file" >
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text judul">Judul</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="judul" id="form-horizontal-text judul" required="required" type="text" placeholder="Masukkan Judul...">
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text tempat_terbit">Tempat Terbit</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="tempat_terbit" id="form-horizontal-text tempat_terbit" required="required" type="text" placeholder="Masukkan Tempat Terbit...">
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text tahun_terbit">Tahun Terbit</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="tahun_terbit" id="form-horizontal-text tahun_terbit" required="required" type="int" placeholder="Masukkan Tahun Terbit...">
                </div>
            </div>

            <button class="uk-align-center uk-button uk-button-primary" type="submit" value="submit" name="submit">Tambahkan</button>

        </form>

    </div>
</div>
    
        <table class="uk-text-center uk-table uk-table-justify uk-table-divider">
         
                <tr class="uk-background-secondary uk-padding">
                    <th class="uk-text-center">Foto</th>
                    <th class="uk-text-center">Judul</th>
                    <th class="uk-text-center">Tempat Terbit</th>
                    <th class="uk-text-center">Tahun Terbit</th>
                    <th class="uk-text-center">Action</th>
                </tr>

              <?php foreach ($perpustakaan as $siswa ) {
                  ?>
                        
                        <tr class='uk-padding'>
                            <td>
                                <img src="<?php echo $siswa['foto'] ?>" width="70" height="70">
                            </td>
                            <td><?php echo $siswa['judul'] ?></td>
                            <td><?php echo $siswa['tempat_terbit'] ?></td>
                            <td><?php echo $siswa['tahun_terbit'] ?></td>
                            <td>
                                <a class="uk-button uk-button-primary" href="edit3.php?id=<?php echo $siswa['id']; ?>">Edit</a> | 
                                <a class="uk-button uk-button-danger" href="hapus3.php?id=<?php echo $siswa['id']; ?>">Hapus</a>
                            </td>
                            </tr>
                    <?php 
                    }
                    ?>
        </table>
    </div>
</body>
</html>