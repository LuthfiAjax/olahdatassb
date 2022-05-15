<?php
include "koneksi.php";
$nisn = $_GET['kd'];

$query = mysqli_query($koneksi, "DELETE FROM pemain WHERE nisn='$nisn'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'siswa_pelatih.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'siswa_pelatih.php'</script>";	
}
?>