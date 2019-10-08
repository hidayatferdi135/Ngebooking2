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
    <!-- sweet aler -->
    <link href="<?= base_url('vendor/bootstrap-sb-admin2/')?>css/sb-admin-2.min.css" rel="stylesheet">
    <script src="<?= base_url("vendor/sweetalert/dist/sweetalert2.all.min.js") ?>"></script>
    <link rel="stylesheet" href="<?= base_url("vendor/sweetalert/dist/sweetalert2.min.css") ?>">

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
        <?= $this->session->flashdata('pesan'); ?>
        <div class="text-center">
          <img style="width: 150px;" src="<?= base_url('assets/img/logo.png'); ?>" alt="">
        </div>
        <h2 class="title text-center" style="color: #0099ff;">Terima Kasih Telah Memesan di <span style="font-family: Kaushan Script" class="text-warning">Ngebooking</span></h2><br>
          <?php foreach ($selesai as $s) {?>
            <div class="container">
            <div class="row">
              <?php $s1 = $s['kode_booking'] ?>
                <?php $s2 = $s['nama_user'] ?>
                <?php $s3 = $s['alamat'] ?>
                <?php $s4 = $s['no_hp'] ?>
                <?php $s5 = $s['nama_hotel'] ?>
                <?php $s6 = $s['check_in'] ?>
                <?php $s7 = $s['durasi'] ?>
                <?php $s8 = $s['tipe'] ?>
                <?php $s9 = $s['total'] ?>
                <?php $s10 = $s['status'] ?>
                <?php $isi =  $s1.' '. $s2.' '.$s3.' '.$s4.' '.$s5.' '. $s6.' '.$s7.' '.$s8.' '.$s9.' '. $s10; ?>
                <?php $isi2 = 'hidayat ferdi' ?>
              <div class="col-12">
                <h3 class="my-2 text-center">Data Tamu</h3>
                <div class="row justify-content-center">
                  <div class="col-6">
                    <table class="ml-auto" style="width: 200px;">
                      <tr>
                        <td style="font-size: 15pt;">Nama User</td>
                      </tr>
                      <tr>
                        <td style="font-size: 15pt;">Alamat</td>
                      </tr>
                      <tr>
                        <td style="font-size: 15pt;">No Hp</td>
                      </tr>
                    </table>
                  </div>
                  <div class="col-6">
                    <table class="ml-5" style="width: 200px;">
                      <tr>
                        <td style="font-size: 15pt;">: <?= $s2 ?></td>
                      </tr>
                      <tr>
                        <td style="font-size: 15pt;">: <?= $s3 ?></td>
                      </tr>
                      <tr>
                        <td style="font-size: 15pt;">: <?= $s4 ?></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <hr style="height: 2px; background: black;">
                <h3>Data Booking</h3>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama Hotel</th>
                      <th scope="col">Check In</th>
                      <th scope="col">Durasi</th>
                      <th scope="col">Tipe Kamar</th>
                      <th scope="col">Total</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td><?= $s['nama_hotel'] ?></td>
                      <td><?= $s['check_in'] ?></td>
                      <td><?= $s['durasi'] ?> Malam</td>
                      <td><?= $s['tipe'] ?></td>
                      <td>Rp. <?= $s['total'] ?>,-</td>
                      <td><b><span style="background: rgba(0,204,0, 0.7);"><?= $s['status'] ?></span></b></td>
                    </tr>
                  </tbody>
                </table><br>
                <div class="text-center">
                  <span class="text-danger"><i class="fas fa-exclamation-triangle text-danger"></i> Apabila status masih belum dibayar, klik tombol dibawah ini untuk konfirmasi ulang.</span><br><br>
                </div>
                <div class="text-center">
                  <a href="" class="btn text-light" style="background: #0099ff;"><i class="fas fa-sync"></i> Konfirmasi ulang</a>
                  <a href="<?= base_url('konsumen/print/'). $s['kode_booking'] ?>" class="text-light btn btn-warning"><i class="fas fa-print"></i> Cetak Pdf</a>
                  <a href="<?= base_url('konsumen/selesai1/'). $s1 ?>" class="text-light btn btn-success"><i class="fas fa-qrcode"></i> Cetak Qr</a>
                  <a href="<?= base_url('auth/logout') ?>" class="text-light btn btn-danger"><i class="fas fa-sign-out-alt"></i> Kembali</a>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
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
