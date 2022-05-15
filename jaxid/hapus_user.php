<?php
include "koneksi.php";
$user_id = $_GET['kd'];

$query = mysqli_query($koneksi, "DELETE FROM pengguna WHERE user_id='$user_id'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'hak_akses.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'hak_akses.php'</script>";	
}
?>