<?php 
    "include koneksi.php";
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
              TAMBAH DATA ADMIN
            </div>
            <div class="card-body">
              <form action="simpan_tambah_user.php" method="POST">
                
               

                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="Full_nama" placeholder="Nama Lengkap" class="form-control">
                </div>

                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" placeholder="Masukkan username" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" name="password" placeholder="Masukan Pasword" class="form-control">
                </div>

                <div class="form-group">
                  <label>Hak Akses</label>

                  <select class="form-select" aria-label="Default select example" name="hak_akses" id="hak_akses">
                       
                       <option value ="admin"> Admin</option>
                  </select>

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
