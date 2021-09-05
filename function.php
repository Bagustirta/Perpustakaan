<?php
    $conn = mysqli_connect("localhost","root","","perpustakaan");

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
        }
        return $rows;
    }

function tambah($data) {
    global $conn;

        $nis = $data['nis'];
        $nama = $data['nama'];
        $username = $data['username'];
        $password = $data['password'];
        $level = $data['level'];

        $query = "INSERT INTO siswa VALUES ('', '$nis', '$nama', '$username', '$password', '$level')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}

function tambah1($data) {
    global $conn;

        $nama = $data['nama'];
        $username = $data['username'];
        $password = $data['password'];
        $level = $data['level'];

        $query = "INSERT INTO petugas VALUES ('', '$nama', '$username', '$password', '$level')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}

function tambah2($data) {
    global $conn;

        $nis = $data['nis'];
        $nama = $data['nama'];
        $username = $data['username'];
        $password = $data['password'];
        $level = $data['level'];

        $query = "INSERT INTO siswa VALUES ('', '$nis', '$nama', '$username', '$password', '$level')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}

function tambah3($data) {
    global $conn;

        $foto = $data['foto'];
        $judul = $data['judul'];
        $tempat_terbit = $data['tempat_terbit'];
        $tahun_terbit = $data['tahun_terbit'];

        $query = "INSERT INTO buku VALUES ('', '$foto', '$judul', '$tempat_terbit', '$tahun_terbit')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}

function tambah4($data) {
    global $conn;

        $foto = $data['foto'];
        $judul = $data['judul'];
        $tempat_terbit = $data['tempat_terbit'];
        $tahun_terbit = $data['tahun_terbit'];

        $query = "INSERT INTO buku VALUES ('', '$foto', '$judul', '$tempat_terbit', '$tahun_terbit')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}

function tambah5($data) {
    global $conn;
    $lama_pinjam= 5;
    $sekarang = date('d-m-Y');
    $tanggal_kembali = date('d-m-Y', strtotime('+5 days'));    

        $nis = $data['nis'];
        $nama = $data['nama'];
        $judul = $data['judul'];
        $tgl_kembali = $tgl_kembali;
        $query = "INSERT INTO pinjam VALUES ('', '$nis', '$nama', '$judul',)";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM buku 
    WHERE 
    judul LIKE '%$keyword%' OR
    tempat_terbit LIKE '%$keyword%' OR
    tahun_terbit LIKE '%$keyword%' 
    ";
    return query($query);
}

function cari1($keyword) {
    $query = "SELECT * FROM petugas
    WHERE 
    nama LIKE '%$keyword%' OR
    username LIKE '%$keyword%' 
    ";
    return query($query);
}

function cari2($keyword) {
    $query = "SELECT * FROM siswa 
    WHERE 
    nis LIKE '%$keyword%' OR
    nama LIKE '%$keyword%' OR
    username LIKE '%$keyword%' 
    ";
    return query($query);
}
?>



