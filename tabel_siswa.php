<!DOCTYPE html>
<html>
<head>
	<title>Tabel Siswa</title>
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
				    <li><a href="crud_buku.php" class="uk-h3"><span class="uk-margin-small-right" uk-icon="icon:  thumbnails"></span>Kelola Buku</a></li>
                    <li><a href="pinjam.php" class="uk-h3"><span class="uk-margin-small-right" uk-icon="icon:  thumbnails"></span>Peminjaman</a></li>
					<li><a href="kembali.php" class="uk-h3"><span class="uk-margin-small-right" uk-icon="icon:  thumbnails"></span>Pengembalian</a></li>
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
include ("function.php");

$perpustakaan = query('SELECT * FROM siswa');

    if( isset($_POST["submit"]) ) {

        if( tambah($_POST) > 0 ) {
            echo "
                <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href='tabel_siswa.php';
                </script> ";
        } else {
            echo "
                <script>
                    alert('data gagal ditambahkan!');
                    document.location.href='tabel_siswa.php';
                </script> ";
        }
    }

   
    if(isset($_POST["cari"]) ) {
        $perpustakaan = cari2($_POST["keyword"]);
    }
    else{
        $perpustakaan = query('SELECT * FROM siswa');
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
        <form class="uk-form-horizontal uk-margin-large" action="" method="post">

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text nama">NIS</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="nis" id="form-horizontal-text nis" type="text" placeholder="Masukkan NIS...">
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text nama">Nama</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="nama" id="form-horizontal-text nama" type="text" placeholder="Masukkan Nama...">
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text username">Username</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="username" id="form-horizontal-text username" type="text" placeholder="Masukkan Username...">
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text password">Password</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="password" id="form-horizontal-text password" type="password" placeholder="Masukkan Password...">
                </div>
            </div>

            <div class="uk-margin">
                <select class="uk-select" name="level" id="form-horizontal-text level">
                    <option>siswa</option>
                </select>
            </div>

            <button class="uk-align-center uk-button uk-button-primary" type="submit" value="submit" name="submit">Tambahkan</button>

        </form>

    </div>
</div>

<div id="modal-centerr" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

        <button class="uk-modal-close-default" type="button" uk-close></button>

        <h3 class="uk-text-center">Tambahkan Data</h3>
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

          

			<p>
			<input class="uk-align-center  uk-button uk-button-primary" type="submit" value="Simpan" name="simpan" />
		</p>
        </form>

    </div>
</div>

    
        <table class="uk-text-center uk-table uk-table-justify uk-table-divider">
         
                <tr class="uk-background-secondary uk-padding">
                    <th class="uk-text-center">NIS</th>
                    <th class="uk-text-center">Nama</th>
                    <th class="uk-text-center">Username</th>
                    <th class="uk-text-center">Password</th>
                    <th class="uk-text-center">Jabatan</th>
                    <th class="uk-text-center">Action</th>
                </tr>
  
                <?php foreach ($perpustakaan as $siswa ) { ?>
                     
                        <tr class='uk-padding'>
                            <td><?php echo $siswa['nis'] ?></td>
                            <td><?php echo $siswa['nama'] ?></td>
                            <td><?php echo $siswa['username'] ?></td>
                            <td><?php echo $siswa['password'] ?></td>
                            <td><?php echo $siswa['level'] ?></td>
                            <td>
                                <a class="uk-button uk-button-primary" href="edit.php?id=<?php echo $siswa['id']; ?>">Edit</a> | 
                                <a class="uk-button uk-button-danger" href="hapus.php?id=<?php echo $siswa['id']; ?>">Hapus</a>
                            </td>
                            </tr>
                <?php
                    }		
                ?>
     
        </table>
    </div>

	
</body>
</html>