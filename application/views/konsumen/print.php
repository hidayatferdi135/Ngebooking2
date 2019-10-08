<!DOCTYPE html>
<html>
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
  <style type="text/css" media="print">
    .keluar{
      display: none;
    }
  </style>
</head>
<link href='<?= base_url('assets/img/logo.png') ?>' rel='shortcut icon'>
<body onload="print()" id="page-top">

  <section id="services">
    <div class="container">
      <?= $this->session->flashdata('pesan'); ?>

      <h2 class="title text-center" style="color: #0099ff;">Bukti Pembayaran dengan <span style="font-family: Kaushan Script" class="text-warning">Ngebooking</span></h2><br>
      <div class="text-center">
          <img style="width: 150px;" src="<?= base_url('assets/img/logo.png'); ?>" alt="">
        </div>
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
            <div class="col-5">
              <img style="width: 220px; margin-left: 140px;" class="my-2" src="<?= site_url('konsumen/QRcode/'). $s1 ?>" alt="">
            </div>
            <div class="col-7">
              <h3 class="my-2">Data Tamu</h3>
              <div class="row my-2">
                <div class="col-4 my-2">
                  <p>Nama Tamu</p>
                  <p>Alamat</p>
                  <p>No Hp</p>
                  <p>Email</p>
                </div>
                <div class="col-8">
                  <p>: <?= $s['nama_user'] ?></p>
                  <p>: <?= $s['alamat'] ?></p>
                  <p>: <?= $s['no_hp'] ?></p>
                  <p>: <?= $s['email'] ?></p>
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
                    <th scope="col">Kode Booking</th>
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
                    <td><?= $s['kode_booking'] ?></td>
                    <td><?= $s['nama_hotel'] ?></td>
                    <td><?= $s['check_in'] ?></td>
                    <td><?= $s['durasi'] ?> Malam</td>
                    <td><?= $s['tipe'] ?> Dewasa</td>
                    <td>Rp. <?= $s['total'] ?>,-</td>
                    <td><?= $s['status'] ?></td>
                  </tr>
                </tbody>
              </table><br>
              <div class="text-center">
                <span class="text-danger"><i class="fas fa-exclamation-triangle text-danger"></i> Simpan PDF ini untuk bukti saat melakukan pembayaran.</span><br><br>
              </div>
              <div class="text-center">
                <a href="<?= base_url('konsumen/selesai/'). $s['kode_booking'] ?>" class="btn keluar text-light" style="background: #0099ff;">Keluar</a>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </section>

</body>
</html>