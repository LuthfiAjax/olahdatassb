<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$ssb = $_POST['nama_club'];
$pemilik = $_POST['nama_pemilik'];
$username = $_POST['username'];
$password = $_POST['password'];

// menginput data ke database
mysqli_query($koneksi,"INSERT INTO manager VALUES ('','$ssb','$pemilik','$username','$password')");

// mengalihkan halaman kembali ke index.php
header("location:hak_akses.php");

?>