<?php  
require 'functions.php';
$show = showcatatan("SELECT * FROM pertanyaan");
// $show menampung array hasil query
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
          <li class="nav-item">
            <a class="nav-link" href="index.html">BERANDA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="soal-main.html">SOAL-SOAL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kompetisi-main.html">KOMPETISI</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="komunitas.html">KOMUNITAS<span class="sr-only">(current)</span></a>
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
      <div class="container p-3 my-3 rounded">
        <div class="row">
          <div class="col-md-10 col-12 shadow p-3">
            <div class="container">
              <div class="row my-2 justify-content-between">
                <div>
                  <a href="komunitas-forum.html" class="btn btn-warning active px-5">Forum</a>
                  <a href="komunitas-artikel.html" class="btn btn-warning px-5">Artikel</a>
                </div>
                <button type="button" class="btn btn-dark px-3">Tanya Sesuatu</button>
              </div>
              <div class="row shadow-sm py-3">
                <div class="col-1 text-center text-dark">
                  <p class="my-1">0 votes</p>
                  <p class="my-1">0 jawaban</p>
                  <p class="my-1">4 Melihat</p>
                </div>
                <div class="col-11  p-2">
                  <h6 class="m-0 d-flex align-items-center">
                    <img src="res/fc.jpg" width="26" height="26" class="rounded-circle mr-1">
                    <a href="" style="text-decoration: none;" class="text-dark"><b>nsyahrial666</b></a>
                  </h6>
                  <div class="pt-2">
                    <a class="h5" style="text-decoration: none; cursor:" href="#">Apakah lorem ipsum nganu?</a>
                    <p class="my-1">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo....
                    </p>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <a href="#" class="badge badge-info">#Tags</a>
                      <a href="#" class="badge badge-info">#Tags</a>
                    </div>
                    <div class="col-12">
                    </div>
                  </div>
                </div>
              </div>
              <?php foreach($show as $row) :?>
              <div class="row shadow-sm py-3">
                <div class="col-1 text-cnsyahrial666">
                  <p class="my-1">0 votes</p>
                  <p class="my-1">0 jawaban</p>
                  <p class="my-1">4 Melihat</p>
                </div>
                <div class="col-11  p-2">
                  <h6 class="m-0 d-flex align-items-center">
                    <img src="res/fc.jpg" width="26" height="26" class="rounded-circle mr-1">
                    <a href="" style="text-decoration: none;" class="text-dark"><b>nsyahrial666</b></a>
                  </h6>
                  <div class="pt-2">
                    <a class="h5" style="text-decoration: none; cursor:" href="#"><?php echo $row["judul_pertanyaan"]; ?></a>
                    <p class="my-1">
                      <?php echo $row["isi_pertanyaan"]; ?>
                    </p>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <a href="#" class="badge badge-info"><?php echo $row["tags_pertanyaan"]; ?></a>
                    </div>
                    <div class="col-12">
                    </div>
                  </div>
                </div>
              </div> 
            <?php endforeach ;?>
            </div>
          </div>
            <div class="col-2 sidebar-outer text-center d-none d-sm-block" >
              <div class="position-fixed col-2 shadow p-2 rounded">
                <div>
                  <h3 class="text-center">Trending</h3>
                  <a href="#" class="badge badge-info">#Matematika</a>
                  <a href="#" class="badge badge-info">#TPB</a>
                  <a href="#" class="badge badge-info">#UTBK</a>
                  <a href="#" class="badge badge-info">#SBMPTN</a>
                </div>
                <hr class="m-1">
                <div class="text-left">
                  <h3 class="text-center">Top User</h3>
                  <div class="">
                        <img src="res/fc.jpg" width="24" height="24" class="rounded-circle mr-2">
                        <a href="">Putin</a>
                        <span class="badge badge-pill badge-light text-right">720 Poin</span>
                  </div>
                  <div class="">
                        <img src="res/fc.jpg" width="24" height="24" class="rounded-circle mr-2">
                        <a href="">Temennya Putin</a>
                        <span class="badge badge-pill badge-light text-right">720 Poin</span>
                  </div>
                  <div class="">
                        <img src="res/fc.jpg" width="24" height="24" class="rounded-circle mr-2">
                        <a href="">Putin</a>
                        <span class="badge badge-pill badge-light text-right">720 Poin</span>
                  </div>
                  <div class="">
                        <img src="res/fc.jpg" width="24" height="24" class="rounded-circle mr-2">
                        <a href="">Temennya Putin</a>
                        <span class="badge badge-pill badge-light text-right">720 Poin</span>
                  </div>
                  <div class="">
                        <img src="res/fc.jpg" width="24" height="24" class="rounded-circle mr-2">
                        <a href="">Putin</a>
                        <span class="badge badge-pill badge-light text-right">720 Poin</span>
                  </div>
                </div>
              </div>
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
          <div class="col-12 mt-3">
            Copyright © 2020 BAGISOAL
          </div>
        </div>
      </div>
    <!-- </div> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
  </body>
</html>