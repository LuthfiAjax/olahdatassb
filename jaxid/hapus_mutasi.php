<?php
include "koneksi.php";
$mutasi = $_GET['kd'];

$query = mysqli_query($koneksi, "DELETE FROM mutasi WHERE id_mutasi='$mutasi'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'chat.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'chat.php'</script>";	
}
?>