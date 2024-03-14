<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Registrasi</title>
    <link rel="shortcut icon" href="asset/img/logo smk mts.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    body{
        background-color: #191970;
    }
    </style>
</head>
  <body>
    
  <div class="container" style="width: 700px;">
    <div class="content">
        <div class="card" style="margin-top: 1rem;">
            <div class="row">
                <div class="col m-2">
                    <h2 align="center">Sign Up</h2>
                    <center><img src="asset/img/logo smk mts.png" width="80" alt="" align="center"></center>
               <p></p><form action="aksi/proses_daftar.php" method="post" >
                    <div class="mb-3">
                        <input type="text" name="nis" placeholder="NIS"class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="namalengkap" placeholder="Nama Lengkap"class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="email" placeholder="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="alamat" placeholder="Alamat" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="username" placeholder="Username" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control" required id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                    <select class="form-select" name="level" aria-label="Default select example">
                        <option selected>Pilih</option>
                        <option value="admin">Admin</option>
                        <option value="petugas">Petugas</option>
                        <option value="peminjam">Peminjam</option>
                    </select>
                    </div>
                    
                    <center><button type="submit" class="btn btn-primary" style="width: 200px;">Simpan</button></center>
                </form>
                <center><p class="mt-3">Already have an account? <a href="index.php" class="">Login</a></p></center>
                </div>
            </div>
        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
