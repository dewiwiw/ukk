<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
    <link rel="shortcut icon" href="asset\img/logo smk mts.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    body{
      background-color:#191970;
    }
    .card{
      background-color:;
    }
    </style>
  </head>
  <body>
  <div class="container" style="width: 650px;">
    <div class="content">
        <div class="card" style="margin-top: 5rem;">
            <div class="row">
                <div class="col m-5">
                <h2 align="center">LOGIN</h2>
                <center><img src="asset/img/logo smk mts.png" width="80" alt="" align="center"></center>
                    <?php
                      if(isset($_GET['pesan'])) {
                        if ($_GET['pesan']=="gagal") {
                          echo '<div class="alert alert-danger">Username atau Password Anda Salah</div>';
                        }
                      }
                    ?>
                    
                <p></p><form action="aksi/cek_login.php" method="post" >
                    <div class="mb-3">
                        <input type="text" name="username" class="form-control" required id="exampleInputEmail1" placeholder="username" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" placeholder="password" required id="exampleInputPassword1">
                    </div>
                    <p class="mt-3" align="right"><a href="registrasi.php" class="">forgot password? </a></p>
                    <input type="checkbox" name="checkbox" class="" required id=""> remember me
                    <center><button type="submit" class="btn btn-primary" style="width: 200px;">Login</button></center>
                </form>
                <p class="mt-3" align="center">don't have an account? <a href="registrasi.php" class="">sign up</a></p>
                </div> 
            </div>
        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
