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
    <!-- tabs jquery -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function() {
      $( "#tabs" ).tabs();
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
      	<div class="row">
      		<div class="col-8">

            <div id="tabs">
            <ul>
              <li><a href="#tabs-1">Transfer</a></li>
              <li><a href="#tabs-2">E-Money</a></li>
              <li><a href="#tabs-3">Bayar di Hotel</a></li>
            </ul>

            <div id="tabs-1">
              <div class="container">
                <div class="row">
                  <div class="col-8">
                    <div class="alert alert-light" role="alert">
                      <span><b>Transfer :</b></span>
                      <img style="width: 50px;" class="ml-2" src="<?= base_url('assets/img/kartu/bca.png') ?>" alt="">
                      <img style="width: 50px;" class="ml-2" src="<?= base_url('assets/img/kartu/bni.png') ?>" alt="">
                      <img style="width: 50px;" class="ml-2" src="<?= base_url('assets/img/kartu/bri.png') ?>" alt="">
                      <img style="width: 50px;" class="ml-2" src="<?= base_url('assets/img/kartu/jatim.png') ?>" alt="">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <?= form_open_multipart('konsumen/konfirmasi'); ?>
                    <?php foreach ($bayar as $b) { ?>
                    <input type="hidden" name="id_pesanan" value="<?= $b['id_pesanan']; ?>">
                    <input type="hidden" name="kode_booking" value="<?= $b['kode_booking']; ?>">
                    <input type="hidden" name="alamat" value="<?= $b['alamat']; ?>">
                    <input type="hidden" name="no_hp" value="<?= $b['no_hp']; ?>">
                    <input type="hidden" name="email" value="<?= $b['email']; ?>">
                    <input type="hidden" name="id_hotel" value="<?= $b['id_hotel']; ?>">
                    <input type="hidden" name="check_in" value="<?= $b['check_in']; ?>">
                    <input type="hidden" name="durasi" value="<?= $b['durasi']; ?>">
                    <input type="hidden" name="total" value="<?= $b['total']; ?>">
                    <input type="hidden" name="status" value="<?= $b['status']; ?>">


                      <div class="form-group">
                        <label>Nama :</label>
                        <input type="text" readonly value="<?= $b['nama_user']; ?>" class="form-control" name="nama_user">
                      </div>
                    <?php } ?>
                      <div class="form-group">
                        <label>No. Rekening :</label>
                        <input type="text" class="form-control" name="nomor">
                      </div>
                      <div class="form-group">
                        <label>Foto Bukti :</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" name="bukti" id="image">
                            <label class="custom-file-label">Choose file</label>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Konfirmasi</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div id="tabs-2">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div class="alert alert-light" role="alert">
                      <span><b>Hanya bisa dengan :</b></span>
                      <img style="width: 40px;" class="ml-2" src="<?= base_url('assets/img/kartu/gopay.png') ?>" alt="">
                      <img style="width: 40px;" class="ml-2" src="<?= base_url('assets/img/kartu/ovo.png') ?>" alt=""><br>
                        <img style="width: 300px;" class="ml-2" src="<?= base_url('assets/img/kartu/scan.jpg') ?>" alt=""><br>
                      <span class="ml-4">*No. Tujuan : 081654928892*</span>
                    </div>
                  </div>
                  <div class="col-12">
                    <?= form_open_multipart('konsumen/konfirmasi'); ?>
                    <?php foreach ($bayar as $b) { ?>
                    <input type="hidden" name="id_pesanan" value="<?= $b['id_pesanan']; ?>">
                    <input type="hidden" name="kode_booking" value="<?= $b['kode_booking']; ?>">
                    <input type="hidden" name="alamat" value="<?= $b['alamat']; ?>">
                    <input type="hidden" name="no_hp" value="<?= $b['no_hp']; ?>">
                    <input type="hidden" name="email" value="<?= $b['email']; ?>">
                    <input type="hidden" name="id_hotel" value="<?= $b['id_hotel']; ?>">
                    <input type="hidden" name="check_in" value="<?= $b['check_in']; ?>">
                    <input type="hidden" name="durasi" value="<?= $b['durasi']; ?>">
                    <input type="hidden" name="total" value="<?= $b['total']; ?>">
                    <input type="hidden" name="status" value="<?= $b['status']; ?>">
                    <input type="hidden" name="id_pesanan" value="<?= $b['id_pesanan']; ?>">
                      <div class="form-group">
                        <label>Nama :</label>
                        <input type="text" readonly value="<?= $b['nama_user']; ?>" class="form-control" name="nama_user">
                      </div>
                    <?php } ?>
                      <div class="form-group">
                        <label>No. E-Money :</label>
                        <input type="text" class="form-control" name="nomor">
                      </div>
                      <div class="form-group">
                        <label>Foto Bukti :</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" name="bukti" id="image">
                            <label class="custom-file-label">Choose file</label>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Konfirmasi</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div id="tabs-3">
              <div class="container">
                <div class="row">
                  <div class="col-12">
                    <div class="alert alert-light" role="alert">
                      <span><b>Harap isi data dengan lengkap dan check-in tepat waktu</b></span><br>
                      <span style="color: red;">* apabila check-in telat dari waktu yang ditentukan, maka akan kami batalkan.</span>
                    </div>
                  </div>
                  <div class="col-12">
                    <?= form_open_multipart('konsumen/konfirmasi1'); ?>
                    <?php foreach ($bayar as $b) { ?>
                    <input type="hidden" name="id_pesanan" value="<?= $b['id_pesanan']; ?>">
                    <input type="hidden" name="kode_booking" value="<?= $b['kode_booking']; ?>">
                    <input type="hidden" name="alamat" value="<?= $b['alamat']; ?>">
                    <input type="hidden" name="no_hp" value="<?= $b['no_hp']; ?>">
                    <input type="hidden" name="email" value="<?= $b['email']; ?>">
                    <input type="hidden" name="id_hotel" value="<?= $b['id_hotel']; ?>">
                    <input type="hidden" name="check_in" value="<?= $b['check_in']; ?>">
                    <input type="hidden" name="durasi" value="<?= $b['durasi']; ?>">
                    <input type="hidden" name="total" value="<?= $b['total']; ?>">
                      <div class="form-group">
                        <label>Nama :</label>
                        <input type="text" readonly value="<?= $b['nama_user']; ?>" class="form-control" name="nama_user">
                        <input type="hidden" value="3" name="status">
                      </div>
                    <?php } ?>
                      <div class="form-group">
                        <label>No. hp</label>
                        <input type="text" class="form-control" name="nomor">
                      </div>
                      <input type="hidden" name="bukti" value="<?= base_url('assets/img/bukti/not-found.png'); ?>">
                      <button type="submit" class="btn btn-primary">Bayar di Tempat</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

          <?php foreach ($bayar as $b) {?>
          <div class="col-4">
            <div class="card" style="width: 20rem;">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <span><b>No Pesanan : </b></span>
                  <span><?= $b['kode_booking']; ?></span>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-4">
                      <img style="width: 70px;" src="<?= base_url('assets/img/hotel/'). $b['image']; ?>" alt="">
                    </div>
                    <div class="col-8">
                      <span style="font-size: 11pt;"><b><?= $b['alamat_hotel']; ?></b></span>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-6">
                      <span class="text-left"><b>Durasi :</b></span><br>
                      <span class="text-left"><b>Check-in :</b></span><br>
                      <span class="text-left"><b>Jumlah :</b></span><br>
                      <span class="text-left"><b>Tipe :</b></span>
                    </div>
                    <div class="col-6">
                      <span class="text-right" style="font-size: 11pt;"><?= $b['durasi']; ?> Malam</span><br>
                      <span class="text-right" style="font-size: 11pt;"><?= $b['check_in'] ?></span><br>
                      <span class="text-right" style="font-size: 11pt;">1 Kamar</span><br>
                      <span class="text-right" style="font-size: 11pt;"><?= $b['tipe']; ?></span>
                    </div>
                  </div>
                </li>
              </ul>
            </div><br>
            <div class="card" style="width: 20rem;">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <span style="font-size: 13pt;"><b>Data Pemasan</b></span>
                </li>
                <li class="list-group-item">
                  <p><?= $b['nama_user']; ?></p>
                  <p><?= $b['no_hp']; ?></p>
                  <p><?= $b['email']; ?></p>
                </li>
              </ul>
            </div>
            <?php } ?>
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

    <script>
      $('.custom-file-input').on('change',function(){
      let fileName = $(this).val().split('\\').pop();
      $(this).next('.custom-file-label').addClass("selected").html(fileName);
    })
    </script>

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
