<?php 
    include "koneksi.php";
    $ssb = $_GET['tambah'];
?>

<!-- Fungsi Menampilkan Data dari Database -->
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM club WHERE nama_club='$_GET[tambah]'");
        $d  = mysqli_fetch_array($query);
        ?>
<!-- End -->	

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <title>Tambah data pemain</title>

      <script>
          $( function() {
            $( "#date" ).datepicker({
              dateFormat: "yy-mm-dd"
            });
          } );
    </script>
  </head>
  <body>
  
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php">SSBKU</a>
            </div>
        </nav>
    </div>
        <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH DATA SISWA SSB anda
            </div>
            <div class="card-body">
              <form action="simpan_tambah_pemain_pelatih.php" method="POST" enctype="multipart/form-data">
                
                <!-- <div class="form-group">
                  <label>Terdaftar</label>
                  <input type="text" readonly="readonly" value="<?php echo date("d-m-Y"); ?> "name="terdaftar" placeholder="Masukkan Nama anda" class="form-control">
                </div> -->

                <div class="form-group">
                  <label>NISN</label>
                  <input type="text" name="nisn" placeholder="Masukkan NISN anda" class="form-control">
                  <a target="_blank" href="https://nisn.data.kemdikbud.go.id/index.php/Cindex/formcaribynama?utm_source=ruanglaptop&utm_medium=referral&utm_campaign=blog"> Lupa NISN? cek datanya disini..</a>
                </div>


                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama_pemain" placeholder="Masukkan Nama anda" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Klub</label>
                  <input readonly="readonly" value="<?php echo $d['nama_club']; ?>"  type="text" name="nama_club" class="form-control">
                </div>

                <div class="form-group">
                  <label>Kelahiran</label>
                  <input type="date" name="kelahiran" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat_pemain" placeholder="Masukkan Alamat Anda (Desa dan Kecamatan )"></textarea>
                </div>

                <div class="form-group">
                  <label>Foto</label>
                  <input type="file" name="foto"  class="form-control">
                  <p style="color: red">Format yang diperbolehkan .png | .jpg | .jpeg</p>
                </div>
                <br>
                <button type="submit" class="btn btn-success ">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

     
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
