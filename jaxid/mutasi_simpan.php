<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nisn = $_POST['nisn'];
$nama_pemain = $_POST['nama_pemain'];
$nama_club = $_POST['nama_club'];
$club_baru = $_POST['club_baru'];
$alasan = $_POST['alasan'];
$status = "Proses";

// menginput data ke database
mysqli_query($koneksi,"INSERT INTO mutasi VALUES ('','$nisn','$nama_pemain','$nama_club','$club_baru','$alasan','$status')");

// mengalihkan halaman kembali ke index.php
header("location:mutasi_siswa.php");

?>