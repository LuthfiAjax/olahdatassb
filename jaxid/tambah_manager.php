<?php 
    include "koneksi.php";
    $club = mysqli_query($koneksi, "SELECT * FROM club");
?>

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
              TAMBAH DATA PENGAKSES SSB
            </div>
            <div class="card-body">
              <form action="simpan_tambah_manager.php" method="POST">
             
                <div class="form-group">
                  <label>Nama SSB</label>
                  <select class="form-select" aria-label="Default select example" name="nama_club" id="nama_club">
                    <option disabled selected> Pilih SSB </option>
                    <?php while($row = mysqli_fetch_array($club)) { ?>
                    <option value="<?=$row['nama_club']?>"><?=$row['nama_club']?></option>
                    <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <label>Nama Pemilik</label>
                  <input type="text" name="nama_pemilik" placeholder="Masukkan Nama Pemilik" class="form-control">
                </div>

                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" placeholder="Masukkan username" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" name="password" placeholder="Masukan Pasword" class="form-control">
                </div>
                <br>

                <button type="submit" class="btn btn-success">SIMPAN</button>
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
