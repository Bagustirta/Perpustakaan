<?php
 
require_once "koneksi.php";
 
$anggota = $_POST['id'];
$buku = $_POST['kode_buku'];
$tgl_pinjam = Date('Y-m-d');
$tgl_kembali = '';
$telat = 0;
$keterangan_buku = '';
$denda_telat = 0;
$denda_buku = 0;
$denda = 0;
$status_buku = 'Pinjam';
 
$query = $conn->query("INSERT INTO pinjam_kembali VALUES(null, '$anggota', '$buku', '$tgl_pinjam', '$tgl_kembali', '$telat', '$keterangan_buku', '$denda_telat', $denda_buku, '$denda', '$status_buku')");
 
echo "<script>
                alert('Peminjam Berhasil di Tambah...')
                window.location='index.php';
            </script>";

?>