<?php  

require 'functions.php';

if(isset($_POST["register"])){
  if(registrasi($_POST) > 0){
    echo "<script>
            alert('user baru berhasil ditambahkan !');
          </script>";
  }else{
    echo mysqli_error($conn);
  }
}

if (isset($_POST["login"])){
  $email = $_POST["email"];
  $password = $_POST["pass"];

  $result = mysqli_query($conn, "SELECT * FROM terdaftar WHERE 
    email = '$email'");
  //cek username
  if(mysqli_num_rows($result) === 1){
    //cek password

    $row = mysqli_fetch_assoc($result);

    if(password_verify($password, $row['pass'])){
      var_dump($row);
      header("Location:index.php");
      exit;
    }
  }
  $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/91e0a5b445.js" crossorigin="anonymous"></script>
    <link rel="icon" href="res/bs.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>BAGISOAL</title>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    </script>
  </head>
  <body>
    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
      <a class="navbar-brand ml-2" style="font-weight: bold;">BAGI<span class="text-warning">SOAL</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
       <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">BERANDA<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="soal-main.html">SOAL-SOAL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kompetisi-main.html">KOMPETISI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="komunitas.html">KOMUNITAS</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              PERINGKAT
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">PROVINSI</a>
              <a class="dropdown-item" href="#">KOTA</a>
              <a class="dropdown-item" href="#">SEKOLAH</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#help">BANTUAN</a>
          </li>
        </ul>
        <form class="form-inline mx-auto my-2">
          <div class="input-group">
            <input class="form-control mr-2 input" type="search" placeholder="Cari" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-warning d-inline-block" type="submit"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </form>
        <div class="mr-2 ml-0">
          <a class="btn btn-outline-warning mx-1" href="login.html">MASUK/DAFTAR</a>
        </div>
      </div>
    </nav>
      <!-- CONTENT -->
      <div class="container text-center p-3 my-5 rounded bg-white shadow">
        <div class="row justify-content-between">
          <div class="col-md-6">
            <h2 class="mb-4">LOGIN</h2>
            <form action="" method="post" class="needs-validation" novalidate>
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <input name="email" type="text" class="form-control" id="username" placeholder="Email" required>
                </div>
                <div class="col-md-12 mb-3">
                  <input name="pass" type="password" class="form-control" id="password" placeholder="Kata Sandi" required>
                </div>
              </div>
              <button name="login" class="btn btn-primary" type="submit">MASUK</button>
              <p class="my-4 text-primary">Jika belum memiliki akun harap daftar terlebih dahulu</p>
            </form>
          </div>
          <div id="registrasi" class="col-md-6 mt-4 mt-md-0">
            <h2 class="mb-4">REGISTRASI</h2>
            <form action="" method="post">
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <input name="namadepan" type="text" class="form-control" id="namaDepan" placeholder="Nama Depan" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <input name="namabelakang" type="text" class="form-control" id="namaBelakang" placeholder="Nama Belakang" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <input name="pass" type="password" class="form-control" id="namaDepan" placeholder="Password" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <input name="pass2" type="password" class="form-control" id="namaBelakang" placeholder="Konfirmasi Password" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <input name="email" type="text" class="form-control" id="email" placeholder="Email" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <!-- <label for="provinsi">Provinsi</label>
                  <select name="provinsi" class="custom-select" id="provinsi" required>
                    <option selected disabled value="">Pilih...</option>
                    <option value="kepri">Kepulauan Riau</option>
                  </select> -->
                </div>
                <div class="col-md-4 mb-3">
                  <!-- <label for="kota">Kota</label>
                  <select name="kota" class="custom-select" id="kota" required>
                    <option selected disabled value="">Pilih...</option>
                    <option value="batam">Batam</option>
                  </select> -->
                </div>
                <div class="col-md-4 mb-3">
                  <label for="sekolah">Sekolah</label>
                  <input name="sekolah" type="text" class="form-control" id="sekolah" required>
                </div>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                  <label class="form-check-label" for="invalidCheck">
                    Saya menyetujui syarat dan ketentuan.
                  </label>
                  <div class="invalid-feedback">
                    Anda harus menyetujui syarat dan ketentuan.
                  </div>
                </div>
              </div>
              <button class="btn btn-primary" type="submit" name="register">DAFTAR</button>
            </form>
          </div>
        </div>
      </div>
      <!-- FOOTER -->
      <div id="help" class="container-fluid p-md-3 mt-5 text-center rounded shadow-lg">
        <div class="row mx-md-5 px-md-5 py-3">
          <div class="col-12 col-md-4 w-25 mb-4">
            <h5 class="mb-3">Tentang</h5>
            <p class="text-justify">
              Website ini berfungsi untuk memberikan layanan media informasi kepada  siswa-siswi Indonesia khususnya SMA yang kesulitan untuk mencari latihan soal.
            </p>
          </div>
          <div class="col-12 col-md-4 w-25 mb-4">
            <h5 class="mb-3">Sosial Media</h5>
            <ul class="list-group list-group-horizontal w-auto mx-auto">
              <li class="list-group-item border-0 mx-auto">
                <a href="" class="text-dark">
                  <i class="fab fa-facebook fa-2x my-2"></i>
                </a>
              </li>
              <li class="list-group-item border-0 mx-auto">
                <a href="" class="text-dark">
                  <i class="fab fa-twitter fa-2x my-2 "></i>
                </a>
              </li>
              <li class="list-group-item border-0 mx-auto">
                <a href="" class="text-dark">
                  <i class="fab fa-instagram fa-2x my-2"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-12 col-md-4 w-25 mb-4">
            <h5 class="mb-3">Kontak</h5>
            <ul class="list-group text-left">
              <li class="list-group-item border-0">
                <a href="" style="text-decoration: none;" class="text-dark">
                  <i class="fas fa-envelope fa-lg d-inline mr-2"></i>
                  <p class="h6 d-inline align-items-center">bagisoal@gmail.com</p>
                </a>
              </li>
              <li class="list-group-item border-0">
                <a href="" style="text-decoration: none;" class="text-dark">
                  <i class="fas fa-phone fa-lg d-inline mr-2"></i>
                  <p class="h6 d-inline align-items-center">0877-1234-1234 (Moshi)</p>
                </a>
              </li>
              <li class="list-group-item border-0">
                <a href="" style="text-decoration: none;" class="text-dark">
                  <i class="fas fa-map-marker-alt fa-lg d-inline mr-2"></i>
                  <p class="h6 d-inline align-items-center">Indonesia</p>
                </a>
              </li>
            </ul>
          </div> 
        </div>
        <div class="row">
          <div class="col-12">
            Copyright © 2020 BAGISOAL
          </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
  </body>
</html>