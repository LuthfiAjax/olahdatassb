<?php 
include 'koneksi.php';

$nama_klub = $_POST['nama_club'];
$pelatih = $_POST['pelatih'];
$usia = $_POST['kel_usia'];
$alamat = $_POST['alamat_club'];
$jadwal_hari = $_POST['jadwal_hari'];
$jadwal_jam = $_POST['jadwal_jam'];

$rand = rand();
$ekstensi =  array('png','jpg','jpeg');
$filename = $_FILES['logo']['name'];
$ukuran = $_FILES['logo']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
	header("location:tambah_ssb.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['logo']['tmp_name'], 'gambar_klub/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "INSERT INTO club VALUES (NULL,'$nama_klub','$pelatih','$usia','$xx','$alamat','$jadwal_hari','$jadwal_jam ')");
		header("location:anggota.php?alert=berhasil");
	}else{
		header("location:tambah_ssb.php?alert=gagal_ukuran");
	}
}
?>