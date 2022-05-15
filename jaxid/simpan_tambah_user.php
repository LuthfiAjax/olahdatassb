<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$Full_nama = $_POST['Full_nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$hak_akses = $_POST['hak_akses'];

// menginput data ke database
mysqli_query($koneksi,"INSERT INTO pengguna VALUES ('','$username','$password','$Full_nama','$hak_akses')");

// mengalihkan halaman kembali ke index.php
header("location:hak_akses.php");

?>