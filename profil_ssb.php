<?php 
    include "jaxid/koneksi.php";
    $profil = $_GET['profil'];
    
?>

<?php
    require "jaxid/koneksi.php";
  

    // ambil data
    $get1 = mysqli_query($koneksi, "select * from pemain where nama_club='$profil'");
    $count1 = mysqli_num_rows($get1); //jumlah pemain

    ?>

<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Profil SSB</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="ico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="ico/favicon-16x16.png">
    <link rel="manifest" href="ico/site.webmanifest">
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a href="#home" class="navbar-brand page-scroll">SSBKU</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#about" class="btn btn-primary btn-lg page-scroll"> Kembali</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
  <?php 
      $data = mysqli_query($koneksi,"select * from club where nama_club = '$profil'");
      while($d = mysqli_fetch_array($data)){
          ?>
    <!-- jumbotron -->
    <div class="jumbotron text-center">
      <img src="jaxid/gambar_klub/<?php echo $d['logo'] ?>" class="img-circle" />
      <h1><?php echo $d['nama_club']; ?></h1>
      <p>Pelatih : <?php echo $d['pelatih']; ?></p>
    </div>
    <!-- akhir jumbotron -->
    
    <!-- about -->
    <section class="about" id="about">
      <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <h2 class="text-center">Kelompok Usia</h2>
              <hr />
              <h4 align="center"><?php echo $d['kel_usia']; ?></h4>
            </div>
            <div class="col-sm-3">
              <h2 class="text-center">Hari Latihan</h2>
              <hr />
              <h4 align="center"><?php echo $d['jadwal_hari']; ?></h4>
            </div>
            <div class="col-sm-3">
              <h2 class="text-center">Jam Latihan</h2>
              <hr/>
              <h4 align="center"><?php echo $d['jadwal_jam']; ?></h4>
            </div>

            <div class="col-sm-3">
              <h2 class="text-center">Jumlah Siswa</h2>
              <hr />
              <h4 align="center"><?= $count1; ?> Siswa</h4>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2>Lokasi</h2>
              <hr />
              <h4 align="center"><a target="_blank" class="btn btn-primary" href="<?php echo $d['alamat_club']; ?>">Klik</a></h4>
            </div>
        </div>
      </div>
    </section>
    <?php
        }
    ?>
    <!-- akhir about -->

    <!-- footer -->
    <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>&copy; copyright 2022 | built with </i> by. <a href="http://instagram.com/luthfi.imron">JaxID</a>.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- akhir footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/script.js"></script>
  </body>
</html>
