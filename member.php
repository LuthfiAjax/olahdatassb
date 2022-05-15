<?php 
  include "jaxid/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SSBKU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">SSBKU</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link btn btn-danger" href="index.php">Kembali</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-primary" href="jaxid/login_user.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
   <p></p>
    <!-- member -->
    <div class="container-fluid pt-5 pb-5 bg-light " >
      <div class="container text-center">
        <h2 class="display-3" id="Member">SSB Terafiliasi</h2>
        <p> Sekolah Sepak Bola Kabupaten Rembang</p>

        <div class="row pt-4 gx-4 gy-4">
          <?php 
          $data = mysqli_query($koneksi,"select * from club");
          while($d = mysqli_fetch_array($data)){
              ?>
          <div class="col-md-2">
            <div class="card crop-img">
              <img src="jaxid/gambar_klub/<?php echo $d['logo'] ?>" class="card-img-top" width="150" height="150" />
              <div class="card-body">
                <h3 class="card-title"><b><?php echo $d['nama_club']; ?></b></h3>
                <br>
                <p class="card-text"><a class="btn btn-primary" href="profil_ssb.php?profil=<?php echo $d['nama_club']; ?>">Detail</a></p>
              </div>
            </div>
          </div>
          <?php
            }
        ?>
        </div>
      </div>
    </div>
   
    <div class="container text-center pt-5 pb-5">All Rights Reserved &copy; 2021</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
