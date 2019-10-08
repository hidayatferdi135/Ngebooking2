<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ngebooking</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('vendor/agency/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?= base_url('vendor/agency/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <script src="<?= base_url('vendor/agency/') ?>vendor/jquery/jquery.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="<?= base_url('vendor/agency/') ?>css/agency.min.css" rel="stylesheet">
    <!-- datepicker -->
    <script src="<?= base_url('vendor/datepicker/js/bootstrap-datepicker.js') ?>"></script>
    <link rel="stylesheet" href="<?= base_url('vendor/datepicker/css/datepicker.css') ?>">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
      $( function() {
        $( "#datepicker" ).datepicker({
          dateFormat: 'd MM yy'
        });
      } );
  </script>

  </head>
  <link href='<?= base_url('assets/img/logo.png') ?>' rel='shortcut icon'>
  <body id="page-top">

        <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background: #0099ff;">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top" style="font-weight: 800;">Ngebooking</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style="font-weight: 800;" href="<?= base_url('konsumen/index') ?>">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle btn btn-warning" style="border-radius: 50px;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?= base_url('auth/index') ?>">Login</a>
                <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    

    <!-- Services -->
    <section id="services">
      <div class="container">

        <div class="alert alert-primary" role="alert">
          Segera Pesan Booking terdekat di Lumajang, dan selamat berlibur!!
        </div>

        <div class="row justify-content-center">
          <div class="col-11">
            <div class="row">
              <div class="col-12 mx-auto">
                <form action="<?= base_url('konsumen/search') ?>" method="post">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-white"><i class="fas fa-search fa-1x"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Ketik nama hotel atau alamat" name="keyword" aria-describedby="basic-addon1">
                </div>
              </form>
              </div>
            </div>
          </div>

          <div class="col-11">
            <?php foreach ($tipe as $t):?>
            <div class="card">
              <div class="container">
                <div class="row my-3">
                  <div class="col-10">
                    <h2><?= $t['nama_hotel'] ?></h2>
                    <button class="btn btn-outline-primary"><?= $t['kategori']; ?></button>
                    <?php
                      for ($i= 1; $i <= $t['bintang']; $i++)
                      {
                         echo "<i class='fas fa-star text-warning'></i>";
                      }
                      ?><br>
                      <span style="color: #999999; font-size: 11pt;">
                      <i class="fas fa-map-marker-alt mr-2" style="color: #999999;"></i><?= $t['alamat_hotel'] ?>
                    </span>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-10">
                    <img style="width: 100%; border-radius: 20px;" src="<?= base_url('assets/img/hotel/'). $t['image'] ?>" alt="">
                  </div>
                  <div class="col-12 my-3">
                    <div class="row">
                      <div class="col-4">
                        <h4>Lumajang</h4>
                        <img style="width: 45px;" src="<?= base_url('assets/img/logo.png') ?>" alt="">
                        <span style="font-size: 18pt; font-weight: 800; color: #0099ff; font-family: Kaushan Script;">Ngebooking</span><br>
                        <span>Dari beberapa hotel di Lumajang</span>
                      </div>
                      <div class="col-4">
                        
                      </div>
                      <div class="col-4 text-right">
                        <span>Harga/kamar/malam mulai dari</span><br>
                        <h2>Rp. <?= $t['harga1'] ?></h2>
                        <a href="#tipe" class="btn btn-warning btn-block text-light">Pilih Kamar</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="container">
                    <p><b>Fasilitas</b></p>
                    <div class="row">
                      <div class="col-2 text-center">
                        <img style="width: 40px; " src="<?= base_url('assets/img/icon/ac.png') ?>" alt=""><br>
                        <span>AC</span>
                      </div>
                      <div class="col-2 text-center">
                        <img style="width: 40px; " src="<?= base_url('assets/img/icon/wifi.png') ?>" alt=""><br>
                        <span>WiFi</span>
                      </div>
                      <div class="col-2 text-center">
                        <img style="width: 40px; " src="<?= base_url('assets/img/icon/utensils.png') ?>" alt=""><br>
                        <span>Resto</span>
                      </div>
                      <div class="col-2 text-center">
                        <img style="width: 40px; " src="<?= base_url('assets/img/icon/24-jam.png') ?>" alt=""><br>
                        <span>Servish 24 jam</span>
                      </div>
                      <div class="col-2 text-center">
                        <img style="width: 40px; " src="<?= base_url('assets/img/icon/parking.png') ?>" alt=""><br>
                        <span>Parkir</span>
                      </div>
                    </div>
                    <br>
                  </div>
                  </div>
                </div>
              </div>
            </div><br><br>

            <div class="card" id="tipe">
              <div class="container">
                <h4 class="my-2">Deluxe</h4>
                <div class="row my-2">
                  <div class="col-4">
                    <img style="width: 100%; border-radius: 20px;" src="<?= base_url('assets/img/hotel/'). $t['image1'] ?>" alt="">
                  </div>
                  <div class="col-8">
                    <form action="<?= base_url('konsumen/pesan') ?>" method="post">
                    <div class="row my-2">
                      <div class="col-2">
                        <p class="my-2"><b>Deluxe</b></p>
                      </div>
                      <div class="col-5">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-white"><i class="fas fa-calendar-check fa-1x"></i></span>
                          </div>
                          <input type="date" class="form-control" name="check_in" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div class="col-5">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-white"><i class="fas fa-cloud-moon fa-1x"></i></span>
                          </div>
                          <select class="form-control form-control" name="durasi">
                            <option value="1">1 malam</option>
                            <option value="2">2 malam</option>
                            <option value="3">3 malam</option>
                            <option value="4">4 malam</option>
                            <option value="5">5 malam</option>
                            <option value="6">6 malam</option>
                            <option value="7">7 malam</option>
                            <option value="8">8 malam</option>
                            <option value="9">9 malam</option>
                            <option value="10">10 malam</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-4">
                        <span><i class="fas fa-bed"></i> 1 Single Bed</span>
                      </div>
                      <div class="col-4">
                        <span><i class="fas fa-users"></i> 2 tamu</span>
                      </div>
                    </div><hr>

                    <div class="row">
                      <div class="col-3">
                        <div class="text-left text-success">
                          <span><i class="fas fa-utensils mr-2"></i> sarapan gratis</span><br>
                          <span><i class="fas fa-wifi"></i> wifi gratis</span>
                        </div>
                      </div>
                      <div class="col-5">
                        <input type="hidden" name="id_hotel" value="<?= $t['id_hotel'] ?>">
                        <input type="hidden" name="tipe" value="Deluxe">
                        <input type="hidden" name="nama_hotel" value="<?= $t['nama_hotel'] ?>">
                        <input type="hidden" name="bintang" value="<?= $t['bintang'] ?>">
                        <input type="hidden" name="alamat_hotel" value="<?= $t['alamat_hotel'] ?>">
                        <input type="hidden" name="harga" value="<?= $t['harga2'] ?>">
                        <input type="hidden" name="image" value="<?= $t['image'] ?>">
                      </div>
                      <div class="col-4 text-right">
                        <span style="color: #0099ff; font-weight: 900; font-size: 19pt;">Rp. <?= $t['harga1'] ?></span><br>
                        <span style="color: grey;">/kamar /malam</span><br>
                        <span style="color: blue;">Termasuk pajak</span>
                        <input type="submit" class="btn btn-warning text-light" value="Pesan">
                      </div>
                    </div>
                  </form>
                    <br>
                  </div>
                </div>
              </div>
            </div><br>

            <div class="card">
              <div class="container">
                <h4 class="my-2">Deluxe Twin</h4>
                <div class="row my-2">
                  <div class="col-4">
                    <img style="width: 100%; border-radius: 20px;" src="<?= base_url('assets/img/hotel/'). $t['image2'] ?>" alt="">
                  </div>
                  <div class="col-8">
                    <form action="<?= base_url('konsumen/pesan') ?>" method="post">
                    <div class="row my-2">
                      <div class="col-3">
                        <p class="my-2"><b>Deluxe Twin</b></p>
                      </div>
                      <div class="col-4">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-white"><i class="fas fa-calendar-check fa-1x"></i></span>
                          </div>
                          <input type="date" class="form-control" name="check_in" aria-describedby="basic-addon1">
                        </div>
                      </div>
                      <div class="col-5">
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text bg-white"><i class="fas fa-cloud-moon fa-1x"></i></span>
                          </div>
                          <select class="form-control form-control" name="durasi">
                            <option value="1">1 malam</option>
                            <option value="2">2 malam</option>
                            <option value="3">3 malam</option>
                            <option value="4">4 malam</option>
                            <option value="5">5 malam</option>
                            <option value="6">6 malam</option>
                            <option value="7">7 malam</option>
                            <option value="8">8 malam</option>
                            <option value="9">9 malam</option>
                            <option value="10">10 malam</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-4">
                        <span><i class="fas fa-bed"></i> 1 Single Bed</span>
                      </div>
                      <div class="col-4">
                        <span><i class="fas fa-users"></i> 2 tamu</span>
                      </div>
                    </div><hr>

                    <div class="row">
                      <div class="col-3">
                        <div class="text-left text-success">
                          <span><i class="fas fa-utensils mr-2"></i> sarapan gratis</span><br>
                          <span><i class="fas fa-wifi"></i> wifi gratis</span>
                        </div>
                      </div>
                      <div class="col-5">
                        <input type="hidden" name="id_hotel" value="<?= $t['id_hotel'] ?>">
                        <input type="hidden" name="tipe" value="Deluxe Twin">
                        <input type="hidden" name="nama_hotel" value="<?= $t['nama_hotel'] ?>">
                        <input type="hidden" name="bintang" value="<?= $t['bintang'] ?>">
                        <input type="hidden" name="alamat_hotel" value="<?= $t['alamat_hotel'] ?>">
                        <input type="hidden" name="harga" value="<?= $t['harga2'] ?>">
                        <input type="hidden" name="image" value="<?= $t['image'] ?>">
                      </div>
                      <div class="col-4 text-right">
                        <span style="color: #0099ff; font-weight: 900; font-size: 19pt;">Rp. <?= $t['harga2'] ?></span><br>
                        <span style="color: grey;">/kamar /malam</span><br>
                        <span style="color: blue;">Termasuk pajak</span>
                        <input type="submit" class="btn btn-warning text-light" value="Pesan">
                      </div>
                    </div>
                  </form>
                    <br>
                  </div>
                </div>
              </div>
            </div>

            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-light">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; RPLGen6Santuy 2019</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('vendor/agency/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?= base_url('vendor/agency/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="<?= base_url('vendor/agency/') ?>js/jqBootstrapValidation.js"></script>
    <script src="<?= base_url('vendor/agency/') ?>js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?= base_url('vendor/agency/') ?>js/agency.min.js"></script>

  </body>

</html>
