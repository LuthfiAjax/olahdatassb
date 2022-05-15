<?php 
  include "jaxid/koneksi.php";
  error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="cekdata.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="ico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="ico/favicon-16x16.png">
    <link rel="manifest" href="ico/site.webmanifest">
    <title>Cek data SSBKU</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.php">SSBKU</a>
        <form action="" method="POST" class="d-flex">
          <input autocomplete="off" autofocus="" name="cari" class="form-control me-2" type="search" placeholder="Cari NISN | Nama | SSB" aria-label="Search" size="20" />
          <button class="btn btn-outline-success" type="submit"> <i class="fa fa-search"></i></button>
        </form>
      </div>
    </nav>
    <center>
      <?php 
          $cari = $_POST['cari'];
      ?>
      <?php                             
          if($cari != ''){
              $data = mysqli_query($koneksi,"select * from pemain where nisn like '".$cari."' or nama_pemain like '%".$cari."%' or nama_club like '".$cari."' ");
          }else{
              echo '<tr><td colspan="6" align="center" ><h3 style="color: White; padding: 18px 30px;">Masukan NISN terlebih dahulu :)</h3></td></tr>';
          }
          
          if(mysqli_num_rows($data)){
          while($d = mysqli_fetch_array($data)){
              ?>
      <table align="center" class="tabel1">
        <thead>
          <tr align="center">
            <th scope="col" width="100">NISN</th>
            <th scope="col" width="100">Nama</th>
            <th scope="col" width="100">Klub</th>
            <th scope="col" width="100">Kelahiran</th>
          </tr>
        </thead>
        <tbody>
          <tr align="center">
            <td scope="col" width="100"><?php echo $d['nisn']; ?></td>
            <td scope="col" width="100"><?php echo $d['nama_pemain']; ?></td>
            <td scope="col" width="100"><?php echo $d['nama_club']; ?></td>
            <td scope="col" width="100"><?php echo $d['kelahiran']; ?></td>
          </tr>
        </tbody>
      </table>
      <?php
        }}else{
            echo '<tr><td colspan="6" align="center"><h3 style="color: White; padding: 18px 30px;">Data yang dicari tidak ditemukan :(</h3></td></tr>';
        }
    ?> 
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
