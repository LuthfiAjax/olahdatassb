<?php 
    include "koneksi.php";
    $nisn = $_GET['detail'];
    
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
            <li><a href="pemain.php" class="btn btn-primary btn-lg page-scroll"> Kembali</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
  <?php 
      $data = mysqli_query($koneksi,"select * from pemain where nisn = '$nisn'");
      while($d = mysqli_fetch_array($data)){
          ?>
    <!-- jumbotron -->
    <div class="jumbotron text-center">
      <img src="gambar_pemain/<?php echo $d['foto'] ?>" class="img-circle" />
      <h1><?php echo $d['nama_pemain']; ?></h1>
      <p>NISN :  <?php echo $d['nisn']; ?></p>
    </div>
    <!-- akhir jumbotron -->
    
    <!-- about -->
    <section class="about" id="about">
      <div class="container">
          <div class="row">
            <div class="col-sm-3">
              <h3 class="text-center">Nama SSB</h3>
              <hr />
              <h4 align="center"><?php echo $d['nama_club']; ?></h4>
            </div>
            <div class="col-sm-3">
              <h3 class="text-center">Tanggal Masuk</h3>
              <hr />
              <h4 align="center"><?php echo $d['terdaftar']; ?></h4>
            </div>
            <div class="col-sm-3">
              <h3 class="text-center">Tanggal Lahir</h3>
              <hr/>
              <h4 align="center"><?php echo $d['kelahiran']; ?></h4>
            </div>
            <div class="col-sm-3">
              <h3 class="text-center">Status Siswa</h3>
              <hr/>
              <h4 align="center"><?php echo $d['status']; ?></h4>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 text-center">
              <h3>AKSI</h3>
              <hr />
              <h4 align="center">
                <a onclick="return confirm ('Yakin hapus <?php echo $d['nama_pemain'];?>.?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus Siswa" href="hapus_siswa.php?hal=hapus&kd=<?php echo $d['nisn'];?>"><span class="fa fa-lg fa-trash"> </span>Hapus</a>
                <a onclick="return confirm ('Yakin Edit <?php echo $d['nama_pemain'];?>.?');" class="btn btn-sm btn-primary tooltips" data-placement="bottom" data-toggle="tooltip" title="Edit Siswa" href="edit_siswa.php?hal=hapus&kd=<?php echo $d['nisn'];?>"><span class="fa fa-lg fa-edit"> </span>Edit</a>
              </h4>
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
