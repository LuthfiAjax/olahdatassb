<?php 
include 'koneksi.php';

$nisn = $_POST['nisn'];
$nama_pemain = $_POST['nama_pemain'];
$nama_club = $_POST['nama_club'];
$kelahiran = $_POST['kelahiran'];
$alamat_pemain = $_POST['alamat_pemain'];
$status = "Aktif";
$terdaftar = date("d-m-Y");

$rand = rand();
$ekstensi =  array('png','jpg','jpeg');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
	header("location:tambah_pemain.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$foto = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'gambar_pemain/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO pemain VALUES ('$nisn','$nama_pemain','$nama_club','$terdaftar','$kelahiran','$alamat_pemain','$foto','$status')");
		header("location:siswa_pelatih.php?alert=berhasil");
	}else{
		header("location:tambah_pemain_pelatih.php?alert=gagal_ukuran");
	}
}
?>