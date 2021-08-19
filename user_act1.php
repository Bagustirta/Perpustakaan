<?php 
    include 'koneksi.php';

    $judul = $_POST['judul'];
    $tempat_terbit = $_POST['tempat_terbit'];
    $tahun_terbit = $_POST['tahun_terbit'];

    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['foto']['name'];
    $ukuran = $_FILES['foto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if(!in_array($ext,$ekstensi) ) {
        header("location:crud_buku.php1?alert=gagal_ekstensi");
    }else{
        if($ukuran < 1044070){		
            $xx = $rand.'_'.$filename;
            move_uploaded_file($_FILES['foto']['tmp_name'], $rand.'_'.$filename);
            mysqli_query($koneksi, "INSERT INTO buku VALUES(NULL,'$xx', '$judul','$tempat_terbit','$tahun_terbit')");
            header("location:crud_buku.php1?alert=berhasil");
        }else{
            header("location:crud_buku1.php?alert=gagak_ukuran");
        }
    }
?>