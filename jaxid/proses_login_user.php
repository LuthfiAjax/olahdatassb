<?php
include ("koneksi.php");
date_default_timezone_set('Asia/Jakarta');

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

//$username = mysqli_real_escape_string($username);
//$password = mysqli_real_escape_string($password);

if (empty($username) && empty($password)) {
	header('location:index.php?error1');

} else if (empty($username)) {
	header('location:index.php?error=2');
	
} else if (empty($password)) {
	header('location:index.php?error=3');
	
}

$q = mysqli_query($koneksi, "select * from manager where username='$username' and password='$password'");
$row = mysqli_fetch_array ($q);

if (mysqli_num_rows($q) == 1) {
    $_SESSION['id'] = $row['id'];
	$_SESSION['username'] = $username;
	$_SESSION['nama_club'] = $row['nama_club'];
	$_SESSION['nama_pemilik'] = $row['nama_pemilik'];   	
	header('location:dashboard_pelatih.php');
	
} else {
	header('location:../index.php?error=4');
}
?>