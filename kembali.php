<?php 
session_start();
 
// cek apakah yang mengakses halaman ini sudah login
if(!isset ($_SESSION['level1']) ) {
    header("location:index.php");
}

// koneksi
$conn = new mysqli('localhost', 'root', '', 'perpustakaan');

if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $judul = $_POST['judul'];
 // untuk disimpan didatabase
 $tgl_pinjam = $_POST['tgl_pinjam'];


 $tgl_kembali = date('Y-m-d'); 
 $batas = strtotime("+5 day",strtotime($tgl_pinjam));
 $batas = date('Y-m-d', $batas); // format tgl peminjaman tahun-bulan-hari
 
$k = $conn->query("SELECT * FROM pinjam WHERE nama =$nama and judul = $judul");
$y = mysqli_num_rows($k);
if($y > 0){

 $q = $conn->query("INSERT INTO kembali (nama, judul, tgl_pinjam, batas, tgl_kembali) VALUES ('$nama', '$judul', '$tgl_pinjam', '$batas', '$tgl_kembali') ");
 $update = $conn->query("UPDATE buku SET jumlah = (jumlah+1) WHERE id = $judul");
 unset($_POST['submit']);
} else {
echo "<script>
        alert('Data Peminjaman Tidak Ditemukan');
        document.location.href='kembali.php';
      </script>";
}
}

?>

<!DOCTYPE html>
<html>
<head>
 <title>Pengembalian</title>
 <link rel="stylesheet" href="css/uikit.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
 <!-- Bootstrap -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
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
                        <li><a href="#" class="uk-h3"><span class="uk-margin-small-right" uk-icon="icon:  thumbnails"></span>Pengembalian</a></li>
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

<div class="container mt-4">
<br>
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
        <form class="uk-form-horizontal uk-margin-large" method="post">

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text nama">Nama</label>
                <div class="uk-form-controls">
                <?php
                            require_once "koneksi.php";
                            $q = $conn->query("SELECT * FROM siswa");?>
                    <select class="uk-select" name="nama" >
                        <option>Pilih Nama Siswa</option>
                    <?php while($res = $q->fetch_assoc()): ?>
                                <option value="<?php echo $res['id'] ?>"><?php echo $res['nama'] ?></option>
                            <?php endwhile; ?>
                    </select>
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text judul">Judul Buku</label>
                <div class="uk-form-controls">
                <?php
                            require_once "koneksi.php";
                            $q = $conn->query("SELECT * FROM buku");?>
                              <select class="uk-select" name="judul" >
                              <option>Pilih Judul Buku</option>
                    <?php while($res = $q->fetch_assoc()): ?>
                                <option value="<?php echo $res['id'] ?>"><?php echo $res['judul'] ?></option>
                            <?php endwhile; ?>
                    </select>
                </div>
            </div>

            <div class="uk-margin">
                <label class="uk-form-label" for="form-horizontal-text tgl_pinjam">Tanggal Peminjaman</label>
                <div class="uk-form-controls">
                    <input class="uk-input" name="tgl_pinjam" id="form-horizontal-text tgl_pinjam" type="date" >
                </div>
            </div>

            <button class="uk-align-center uk-button uk-button-primary" type="submit" value="submit" name="submit">Tambahkan</button>

        </form>

    </div>
</div>

   <table class="uk-text-center uk-table uk-table-justify uk-table-divider">
    <tr class="uk-background-secondary uk-padding">
     <th class="uk-text-center">No</th>
     <th class="uk-text-center">Nama</th>
     <th class="uk-text-center">Judul Buku</th>
     <th class="uk-text-center">Total Denda</th>
     <th class="uk-text-center">Tgl. Peminjaman</th>
     <th class="uk-text-center">Batas Pengembalian</th>
     <th class="uk-text-center">Tgl. Pengembalian</th>
     <th class="uk-text-center">Aksi</th>
    </tr>

    <?php
    include "koneksi.php";
    // hanya menampilkan data yang terlambat
    $q = $conn->query("SELECT kembali.* , siswa.nama, buku.judul FROM(( kembali
    INNER JOIN siswa ON siswa.id = kembali.nama)
    INNER JOIN buku ON buku.id = kembali.judul)");
  
    $no = 1;
    while($r =mysqli_fetch_array($q)){
           // untuk menghitung selisih hari terlambat
     $t = date_create(date($r['batas']));
     $n = date_create(date('Y-m-d'));
     $terlambat = date_diff($t, $n);
     $hari = $terlambat->format("%r%a");
     $skrng = date('Y-m-d');
     // menghitung denda
     if ($skrng > $r['batas']) {
        $denda = $hari * 1000;            
    } else {
        $denda = 0;
    }
    ?>

    <tr>
     <td class="uk-text-center"><?= $no++ ?></td>
     <td class="uk-text-center"><?= $r['nama'] ?></td>
     <td class="uk-text-center"><?= $r['judul'] ?></td>
     <td><?= $denda ?></td>
     <td class="uk-text-center"><?= $r['tgl_pinjam'] ?></td>
     <td class="uk-text-center"><?= $r['batas'] ?></td>
     <td class="uk-text-center"><?= $r['tgl_kembali'] ?></td>
     <td class="uk-text-center"> <a class="uk-button uk-button-danger" href="hapus6.php?id=<?php echo $r['id']; ?>">Hapus</a> </td>
    </tr>

    <?php
    }
    ?>

   </table>
  </div>
 </div>


</body>
</html>
