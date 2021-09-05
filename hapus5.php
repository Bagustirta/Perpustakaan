<?php

include("koneksi.php");

if( isset($_GET['id']) ){
	
	// ambil id dari query string
	$id = $_GET['id'];
	
	// buat query hapus
	$sql = "DELETE FROM pinjam WHERE id=$id";
	$query = mysqli_query($koneksi, $sql);
	$update = $koneksi->query("UPDATE buku SET jumlah = (jumlah+1) WHERE id = $judul");
	
	// apakah query hapus berhasil?
	if( $query ){
		header('Location: pinjam.php');
	} else {
		die("gagal menghapus...");
	}
	
} else {
	die("akses dilarang...");
}

?>
