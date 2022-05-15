<?php
    include "koneksi.php";

    $nisn=$_POST["nisn"];
    $Nama=$_POST["nama_pemain"];
    $SSB=$_POST["nama_club"];
    $TGL=$_POST["kelahiran"];
    $Alamat=$_POST["alamat_pemain"];
    $status=$_POST["status"];

    $sql="UPDATE pemain SET nisn ='$nisn', nama_pemain='$Nama', nama_club='$SSB', kelahiran='$TGL',alamat_pemain='$Alamat', status='$status' WHERE nisn = '$nisn'";
    $update=mysqli_query($koneksi, $sql);
    if ($update){
    	header("location: pemain.php");
    }else{
        echo "gagal Update";
    }
 ?>