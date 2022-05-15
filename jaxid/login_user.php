<?php include "koneksi.php" ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>login user</title>
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="../index.php">SSBKU
        </a>
    </div>
    </nav>
        <div id="card">
            <div id="card-content">
            <div id="card-title">
                <h2>LOGIN</h2>
                <div class="underline-title"></div>
            </div>
            <form method="post" action="proses_login_user.php" class="form">
                <label for="user-email" style="padding-top:13px">
                    &nbsp;Username
                  </label>
                    <input id="username" class="form-content" type="text" name="username" autocomplete="on" required />
                      <div class="form-border"></div>
                  <label for="user-password" style="padding-top:22px">&nbsp;Password
                </label>
                  <input id="user-password" class="form-content" type="password" name="password" required />
                    <div class="form-border"></div>
                  <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
                <a href="../jaxid/" id="signup">login Admin?</a>
                <a href="../index.php?#kontak" id="signup">lupa password silahkan hubungi Admin</a>
            </form>
            </div>
        </div>
        <div class="container text-center pt-5 pb-5">All Rights Reserved jaxid &copy; 2022</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
