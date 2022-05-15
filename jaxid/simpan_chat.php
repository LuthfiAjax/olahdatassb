<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama_lengkap'];
$email = $_POST['email'];
$nohp = $_POST['no_phone'];
$pesan = $_POST['pesan'];

// menginput data ke database
mysqli_query($koneksi,"insert into pesan values('','$nama','$email','$nohp', '$pesan')");

// mengalihkan halaman kembali ke index.php
header("location:../index.php");

?>