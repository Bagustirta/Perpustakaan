<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
	
	// ambil data dari formulir
	$id = $_POST['id'];
	$foto = $_POST['foto'];
	$judul = $_POST['judul'];
	$tempat_terbit = $_POST['tempat_terbit'];
	$tahun_terbit = $_POST['tahun_terbit'];
	
	// buat query update
	$sql = "UPDATE buku SET foto='$foto', judul='$judul', tempat_terbit='$tempat_terbit', tahun_terbit='$tahun_terbit' WHERE id=$id";
	$query = mysqli_query($koneksi, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-siswa.php
		header('Location: crud_buku1.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
	
	
} else {
	die("Akses dilarang...");
}

?>

