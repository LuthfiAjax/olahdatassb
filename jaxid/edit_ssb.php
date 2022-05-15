<?php 
    include "koneksi.php";
?>

    <!-- Fungsi Menampilkan Data dari Database -->
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM club WHERE id_club='$_GET[kd]'");
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

    <title>Tambah data pemain</title>
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
              UBAH  DATA  SSB
            </div>
            <div class="card-body">
              <form action="update_ssb.php" method="POST" enctype="multipart/form-data">
            
              <div class="form-group">
                  <label>ID Club</label>
                  <input type="text" name="id_club" value="<?php echo $d['id_club']; ?>" class="form-control" readonly="readonly" autofocus="on">
                </div>

              <div class="form-group">
                  <label>Nama SSB</label>
                  <input class="form-control" type="text" name="nama_club" value="<?php echo $d['nama_club']; ?>" >
                </div>
 
                <div class="form-group">
                  <label>Nama Pelatih</label>
                  <input type="text" name="pelatih" value="<?php echo $d['pelatih']; ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>Kelompok Usia</label>
                  <input type="text" name="kel_usia" value="<?php echo $d['kel_usia']; ?>" class="form-control">
                </div>
<br>
                <div class="form-group">
                  <label>Logo</label>
                  <img src="gambar_klub/<?php echo $d['logo'] ?>" width="250" height="250" class="img-rounded" style="border: 3px solid #888;"/>
                </div>
<br>
                <div class="form-group">
                  <label>Alamat SSB</label>
                  <input type="text" name="alamat_club" value="<?php echo $d['alamat_club']; ?>" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Jadwal Hari</label>
                  <input type="text" name="jadwal_hari" value="<?php echo $d['jadwal_hari']; ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>Jam</label>
                  <input type="text" name="jadwal_jam" value="<?php echo $d['jadwal_jam']; ?>" class="form-control">
                </div>
                <br>

                <button type="submit" class="btn btn-success">SIMPAN</button>
                &nbsp;&nbsp;&nbsp;<a class="btn btn-warning icon-btn" href="anggota.php"><i class="fa fa-fw fa-lg fa-times-circle "></i>Cancel</a>

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
