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

        <div class="row">
          <div class="col-12">
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

          <div class="col-4">
            <div class="card" style="width: 18rem;">
              <div class="card-header">
                Pencarian Hotel
              </div>
              <ul class="list-group list-group-flush">
                <?php foreach ($tb_hotel as $h):?>
                <li class="list-group-item">
                  <a href="<?= base_url('konsumen/tipe/'). $h->id_hotel ?>" style="color: #0099ff;">
                  <div class="row">
                    <div class="col-6">
                      <img style="width: 80px;" src="<?= base_url('assets/img/hotel/').$h->image; ?>" alt="">
                    </div>
                    <div class="col-6">
                      <h6><?= $h->nama_hotel; ?></h6>
                      <?php
                      for ($i= 1; $i <= $h->bintang; $i++)
                      {
                         echo "<i style='font-size: 11pt;' class='fas fa-star text-warning'></i>";
                      }
                      ?><br>
                      <span style="font-size: 11pt; color: #00ff00; "><b>Rp. <?= $h->harga1; ?>,-</b></span>
                    </div>
                  </div>
                  </a>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>

          <div class="col-8">
            <?php foreach ($tb_hotel as $h):?>
            <div class="card" style="background: rgba(0,0,204, 0.1)">
            <div class="container">
            <table class="table my-2">
              <tbody>
                <tr>
                  <td style="padding: 2px; width: 205px;"><img style="width: 200px;" src="<?= base_url('assets/img/hotel/'). $h->image; ?>" alt=""></td>
                  <td>
                    <h3><?= $h->nama_hotel ?></h3>
                    <button class="btn btn-outline-primary"><?= $h->kategori; ?></button>
                    <?php
                      for ($i= 1; $i <= $h->bintang; $i++)
                      {
                         echo "<i class='fas fa-star text-warning'></i>";
                      }
                      ?><br>
                    <span style="color: #999999; font-size: 11pt;">
                      <i class="fas fa-map-marker-alt mr-2" style="color: #999999;"></i><?= $h->alamat_hotel ?>
                    </span>
                  </td>
                  <td>
                    <span>Harga per malam</span><br>
                    <span style="color: #00ff00;">Rp. <?= $h->harga1; ?>,-</span><br>
                    <span style="color: #0099ff;">Termasuk Pajak</span><br><br>
                    <a class="btn" style="background: #0099ff; color: white;" href="<?= base_url('konsumen/tipe/'). $h->id_hotel ?>">Pilih Kamar</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          </div><br>
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
