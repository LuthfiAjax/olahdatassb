<?php
include "koneksi.php";
$id_club = $_GET['kd'];

$query = mysqli_query($koneksi, "DELETE FROM club WHERE id_club='$id_club'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'anggota.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'anggota.php'</script>";	
}
?>