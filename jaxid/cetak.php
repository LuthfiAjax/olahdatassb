<?php 
    include "koneksi.php";
    $cari = $_GET['cetak'];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Cetak Dokumen</title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body onload="print()">
    <table width="100%">
        <tr>
            <td width="25" align="center"><img src="img/uny.png" width="100%"></td>
            <td width="25" align="center"><h1>Data SSBKU</h1>Mencetak data dari : <b><?= $cari ?><b></td>
            <td width="25" align="center"><img src="img/uny.png" width="100%"></td>
        </tr>
    </table>
    <hr>
    <table align="center" class="table bg-white rounded shadow-sm  table-hover">
        <thead>
            <tr align="center" border=1>
                <th scope="col" width="100">NISN </th>
                <th scope="col" width="100">Nama</th>
                <th scope="col" width="100">Klub</th>
                <th scope="col" width="100">Kelahiran</th>
                <th scope="col" width="100">Alamat</th>
                <th scope="col" width="100">Foto</th>
            </tr>
        </thead>
        <?php 
            $data = mysqli_query($koneksi,"select * from pemain where nisn like '%".$cari."%' or
                    nama_pemain like '%".$cari."%' or nama_club like '%".$cari."%'");
            while($d = mysqli_fetch_array($data)){
                ?>
        <tbody>
        
            <tr align="center">
                <td><?php echo $d['nisn']; ?></td>
                <td><?php echo $d['nama_pemain']; ?></td>
                <td><?php echo $d['nama_club']; ?></td>
                <td><?php echo $d['kelahiran']; ?></td>
                <td><?php echo $d['alamat_pemain']; ?></td>
                <td><img src="gambar_pemain/<?php echo $d['foto'] ?>"  class="rounded-circle" width="65" height="65"></td>
                
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <footer>
        <p>© 2022 SSBKU.COM</p>
    </footer>
    <style>
        footer {
                display: flex;
                justify-content: center;
                padding: 5px;
                background-color: #45a1ff;
                color: #fff;
            }
    </style>
</body>
</html>