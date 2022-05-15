<?php
include "koneksi.php";
$id = $_GET['kd'];

$query = mysqli_query($koneksi, "DELETE FROM manager WHERE id='$id'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'hak_akses.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'hak_akses.php'</script>";	
}
?>