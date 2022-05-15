<?php 
include 'koneksi.php';
error_reporting(0);

$nisn = $_POST['nisn'];
$nama_pemain = $_POST['nama_pemain'];
$nama_club = $_POST['nama_club'];
$kelahiran = $_POST['kelahiran'];
$alamat_pemain = $_POST['alamat_pemain'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
	echo "<script>alert('Format Gambar Salah'); window.location = 'PendaftaranSiswa.php'</script>";
}else{
	if($ukuran < 1044070){		
		$foto = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar_pemain/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO pemain VALUES ('$nisn','$nama_pemain','$nama_club','$kelahiran','$alamat_pemain','$foto ')");
		
		echo "<script>alert('Pendaftaran Berhasil'); window.location = 'PendaftaranSiswa.php'</script>";
	}else{
		echo "<script>alert('Pendaftaran Gagal ukuran Gambar Terlalu Besar'); window.location = 'PendaftaranSiswa.php'</script>";
	}
}
?>