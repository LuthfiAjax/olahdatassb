<?php 
    "include koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SSBKU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">SSBKU</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fa-ul">
            <li class="nav-item">
              <a class="nav-link" href="#Home"><i class="fas fa-house-user"></i> Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Profil"><i class="fas fa-user-tie"></i> Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="member.php"><i class="fas fa-futbol"></i> SSB</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kontak"><i class="fas fa-address-book"></i> Kontak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-primary" href="jaxid/login_user.php"><b>Login</b></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- banner -->
    <div class="container-fluid banner" id="Home">
      <div class="container text-center">
        <h2 class="display-6">Sistem Olah Data </h2>
        <h5 class="display-1">SSBKU</h5>
        <a href="cekdata.php">
          <button type="button" class="btn btn-danger btn-lg" ><i class="fa fa-search"></i> Cek Datamu</button>
        </a>
      </div>
    </div>
    
    <!-- tentang -->
    <div id="tentang" class="container-fluid pt-5 pb-5 ">
      <div class="container">
        <h2 class="display-3 text-center" id="tentang">Tentang</h2>
        <p class="text-center">Website Ini Dibuat Untuk Sumber Olah Data Siswa SSB Se-Kabupaten Rembang</p>
        <div class="clearfix pt-5">
          <img id="gambar" src="https://cdn.krjogja.com/wp-content/uploads/2020/03/Logo-UNY-1024x576.jpg" class="col-md-6 float-md-end mb-3 crop-img" width="300" height="300" />
          <p> Tujuan peneliti adalah mengembangkan media pengembangan informasi terkait pemain SSB, jadwal, dan lokasi Latihan.</p>
          <p> melalui website guna membantu memberikan kemudahan masyarakat untuk mencari informasi seputar SSB yang ada di Kabupaten Rembang</p>
          </div>
      </div>
    </div>

    <!-- tim -->
    <div class="container-fluid pt-5 pb-5 bg-light Profil">
      <div class="container text-center">
        <h2 class="display-3" id="Profil">Pengembang Sistem Olah Data SSBKU</h2>
        <p> Pengembangan Database Melalui Website Bagi Siswa SSB Terafiliasi Se Kabupaten Rembang U-12</p>
        <div class="row pt-4 gx-4 gy-4">
          <div class="col-md-4 text-center tim">
            <img src="img/dikin.jpg" class="rounded-circle mb-3" />
            <h4>Shodikin</h4>
            <p>Peneliti dan Pengembang</p>
            <p>
              <a target="_blank" href="https://www.instagram.com/dikiftisland/" class="social"><i class="fab fa-instagram"></i></a>
              <a target="_blank" href="https://pddikti.kemdikbud.go.id/data_mahasiswa/MzBEMTAxMEEtNUY1NS00QTRCLThBMTMtMDc0NkI3OTFGMTIz" class="social"><i class="fab fa-id-card"></i></a>
              <a target="_blank" href="https://api.whatsapp.com/send/?phone=6281933528855&text&app_absent=0" class="social"><i class="fab fa-whatsapp"></i></a>
            </p>
          </div>
          <div class="col-md-4 text-center tim">
            <img src="img/dosen.png" class="rounded-circle mb-3" />
            <h4>Dr. Nawan Primasoni, S.Pd.Kor., M.Or.</h4>
            <p>Dosen Pembimbing</p>
            <p>
              <a target="_blank" href="http://staffnew.uny.ac.id/staff/198405212008121001" class="social"><i class="fab fa-id-card"></i></a>
            </p>
          </div>
          <div class="col-md-4 text-center tim">
            <img src="img/uny.png" class="rounded-circle mb-3" />
            <h4>Universitas Negeri Yogyakarta</h4>
            <p>Fakultas Ilmu Keolahragaan</p>
            <p>
              <a target="_blank" href="https://twitter.com/unyofficial/" class="social"><i class="fab fa-twitter"></i></a>
              <a target="_blank" href="https://www.instagram.com/unyofficial/" class="social"><i class="fab fa-instagram"></i></a>
              <a target="_blank" href="https://www.uny.ac.id/" class="social"><i class="fab fa-internet-explorer"></i></a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Client -->
    <div class="container-fluid client pt-5 pb-5">
      <div class="container text-center">
        <div class="row pt-4 gx-4 gy-4">
          
        </div>
      </div>
    </div>

    <!-- kontak -->
    <div class="container-fluid pt-5 pb-5 kontak">
       <form action="jaxid/simpan_chat.php" method="POST">
        <div class="container">
        <h2 class="display-3 text-center" id="kontak">Kontak Kami</h2>
        <p class="text-center">kirim Kritik dan Saran</p>

          <div class="row pb-3">
              <div class="col-md-6">
                <input class="form-control form-control-lg mb-3" name="nama_lengkap" type="text" placeholder="Nama" />
                <input class="form-control form-control-lg mb-3" name="email" type="text" placeholder="Email" />
                <input class="form-control form-control-lg mb-3" name="no_phone" type="text" placeholder="No. Phone" />
              </div>
              <div class="col-md-6 ">
                <textarea class="form-control form-control-lg"   name="pesan" rows="5" placeholder="Isi Pesan "></textarea>
              </div>
          </div>
            <div class="col-md-3 mx-auto text-center">
              <button type="submit" class="btn btn-danger btn-lg">Kirim Pesan</button>
            </div>
          </div>
          </form>
      </div>
    <div class="container text-center pt-5 pb-5">All Rights Reserved jaxid &copy; 2022</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
