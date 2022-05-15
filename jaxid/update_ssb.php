<?php
include "koneksi.php";

$id_club       = $_POST['id_club'];
$nama_club = $_POST['nama_club'];
$pelatih = $_POST['pelatih'];
$kel_usia = $_POST['kel_usia'];
$alamat_club = $_POST['alamat_club'];
$jadwal_hari = $_POST['jadwal_hari'];
$jadwal_jam = $_POST['jadwal_jam'];


    $sql="UPDATE club SET nama_club ='$nama_club', pelatih='$pelatih', kel_usia='$kel_usia',  alamat_club='$alamat_club', jadwal_hari='$jadwal_hari', jadwal_jam='$jadwal_jam' WHERE id_club = '$id_club'";
    $update=mysqli_query($koneksi, $sql);
    if ($update){
    	header("location: anggota.php");
    }else{
        echo "gagal Update";
    }

?>

