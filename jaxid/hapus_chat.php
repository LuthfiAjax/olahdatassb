<?php
include "koneksi.php";
$id_pesan = $_GET['kd'];

$query = mysqli_query($koneksi, "DELETE FROM pesan WHERE id_pesan='$id_pesan'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'chat.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'chat.php'</script>";	
}
?>