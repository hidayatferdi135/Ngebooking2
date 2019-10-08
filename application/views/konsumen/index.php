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
    <script>
    $(function () {
    $('#datepicker').datepicker({
    autoclose: true
  });
    $('#datepicker1').datepicker({
    autoclose: true
  });
  });
  </script>

  </head>
  <link href='<?= base_url('assets/img/logo.png') ?>' rel='shortcut icon'>
  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Ngebooking</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger btn-warning" href="#" data-toggle="modal" data-target="#loginModal">Akun</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead" style="background: url('<?= base_url('assets/img/header-bg2.jpg') ?>'); background-size: cover;">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in" style="margin-top: -15%;">Cari hotel atau penginapan??</div>
          <div class="intro-lead-in"><b class="text-warning">Ngebooking</b> aja dulu</div>
          <form action="<?= base_url('konsumen/search') ?>" method="post">
            <div class="row justify-content-center">
              <div class="col-md-7">

                <div class="card my-2" style="box-shadow: 4px 4px 4px rgba(0,0,0,0.3)">
                  <div class="card-body">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-white" style="border: none;"><i class="fas fa-search fa-1x"></i></span>
                        </div>
                        <input type="text" style="border: none;" class="form-control" placeholder="Ketik nama hotel atau alamat" name="keyword" aria-describedby="basic-addon1">
                      </div>
                  </div>
                </div>

                <div class="card my-2 bg-warning" style="height: 80px; box-shadow: 4px 4px 4px rgba(0,0,0,0.3)">
                      <input type="submit" value="Cari" class="btn-warning btn-lg btn-block text-light" style="border: none; height: 100%;">
                </div>

              </div>
            </div>
          </form>
        </div>
      </div>
    </header>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
            <h3 class="section-subheading text-muted">Pelayanan kami</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-3">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-bed fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Master Bedrooms</h4>
            <p class="text-muted">Kami membantu memilih kamar yang luas dan fasilitas lengkap untuk anda.</p>
          </div>
          <div class="col-md-3">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-utensils fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Free Dinner</h4>
            <p class="text-muted">Pelayanan makan malam gratis di setiap hotel kami.</p>
          </div>
          <div class="col-md-3">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-wifi fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Wifi Corner</h4>
            <p class="text-muted">Pelayanan wifi gratis.</p>
          </div>
          <div class="col-md-3">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-hotel fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">The Best</h4>
            <p class="text-muted">Kami juga memilihkan hotel terbaik untuk anda.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Portfolio</h2>
            <h3 class="section-subheading text-muted">Beberapa portofolio dari sebagian hotel kami.</h3>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#abymodal">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-search fa-3x"></i>
                </div>
              </div>
              <img style="height: 260px; width: 500px;" class="img-fluid" src="<?= base_url('assets/img/hotel/aby2.jpg') ?>" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Aby Hotel</h4>
              <p class="text-muted">Sukodono, Lumajang</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#alohamodal">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-search fa-3x"></i>
                </div>
              </div>
              <img style="height: 260px; width: 500px;" class="img-fluid" src="<?= base_url('assets/img/hotel/aloha1.jpg') ?>" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Grand Aloha Hotel</h4>
              <p class="text-muted">Sukodono, Lumajang</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#gmmodal">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-search fa-3x"></i>
                </div>
              </div>
              <img style="height: 260px; width: 500px;" class="img-fluid" src="<?= base_url('assets/img/hotel/gm2.jpg') ?>" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Gajah Mada Hotel</h4>
              <p class="text-muted">Lumajang, Lumajang</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#lumajangmodal">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-search fa-3x"></i>
                </div>
              </div>
              <img style="height: 260px;" class="img-fluid" src="<?= base_url('assets/img/hotel/lumajang1.jpg') ?>" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Hotel Lumajang</h4>
              <p class="text-muted">Lumajang, Lumajang</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#primamodal">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-search fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?= base_url('assets/img/hotel/prima1.jpg') ?>" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Prima Hotel</h4>
              <p class="text-muted">Sukodono, Lumajang</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#gmmodal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-search fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?= base_url('assets/img/hotel/gm5.jpg') ?>" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Gajah Mada Hotel</h4>
              <p class="text-muted">Lumajang, Lumajang</p>
            </div>
          </div>
            <a href="<?= base_url('konsumen/search')?>" class="btn btn-lg btn-success">Booking Now</a>
        </div>
      </div>
    </section>

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted">Sedikit Tentang Ngebooking.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="<?= base_url('vendor/agency/') ?>img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2019 - Now</h4>
                    <h4 class="subheading">Our Business Beginnings</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Awal kami memulai bisnis ini adalah dimulai pada tahun 2019. Aplikasi ini kami buat dengan tujuan untuk mempermudah konsumen dalam pemesanan hotel khususnya di Lumajang</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="<?= base_url('vendor/agency/') ?>img/about/2.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4><b>Lumajang.</b></h4>
                    <h4 class="subheading">Our Location in Lumajang</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Untuk hotel dan penginapan yang kami sediakan hanya untuk di sekitar daerah Lumajang saja.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="<?= base_url('vendor/agency/') ?>img/about/3.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">Transition to Full Service</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Kami selalu memberikan layana penuh kepada konsumen.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="<?= base_url('vendor/agency/') ?>img/about/4.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="subheading">Our Dream</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Kami menginginkan aplikasi ini dapat berguna bagi konsumen. Kami harap aplikasi ini dapat laris.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Be Part
                    <br>Of Our
                    <br>Story!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
            <h3 class="section-subheading text-muted">Team kami yang berpengalaman</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?= base_url('assets/img/arman.jpg') ?>" alt="">
              <h4>Arman Maulana S.</h4>
              <p class="text-muted">Lead Designer</p>
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
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?= base_url('assets/img/dayat.jpg') ?>" alt="">
              <h4>M. Hidayat Ferdiyanto</h4>
              <p class="text-muted">Programmer and Developer</p>
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
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="<?= base_url('assets/img/fido.jpg') ?>" alt="">
              <h4>Fido Firmansyah</h4>
              <p class="text-muted">Lead Marketer</p>
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
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">Beberapa team kami yang akan mengembangkan aplikasi ini sehingga semakin cepat dalam membantu anda.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Contact kami yang mungkin bisa membantu anda.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
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

    <!-- Portfolio Modals -->

    <!-- Aby Modal -->
    <div class="modal modal fade" id="abymodal" style="width: 100%;" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Aby Hotel</h2>
                  <img style="width: 400px;" class="img-fluid d-block mx-auto" src="<?= base_url('assets/img/hotel/aby2.jpg') ?>" alt="">
                  <ul class="list-inline">
                    <li><b>Alamat:</b> Jl. Soekarno, Selokbesuki, Sukodono, Lumajang</b></li>
                    <li><b>Telepon:</b> 0823-30636554</li>
                    <li><b>Category:</b> Hotel</li>
                  </ul>
                  <a href="<?= base_url('konsumen/hotel')?>" class="btn btn-success">Booking</a>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal modal fade" id="alohamodal" style="width: 100%;" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Grand Aloha Hotel</h2>
                  <img style="width: 400px;" class="img-fluid d-block mx-auto" src="<?= base_url('assets/img/hotel/aloha1.jpg') ?>" alt="">
                  <ul class="list-inline">
                    <li><b>Alamat:</b> Jl. Jendral Ahmad Yani, Kutorenon, Sukodono, Lumajang</li>
                    <li><b>Telepon:</b> (0334) 888023</li>
                    <li><b>Category:</b> Hotel</li>
                  </ul>
                  <a href="<?= base_url('konsumen/hotel')?>" class="btn btn-success">Booking</a>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="modal modal fade" id="gmmodal" style="width: 100%;" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Gajah Mada Hotel</h2>
                  <img style="width: 400px;" class="img-fluid d-block mx-auto" src="<?= base_url('assets/img/hotel/gm2.jpg') ?>" alt="">
                  <ul class="list-inline">
                    <li><b>Alamat:</b> Tompokersan, Lumajang, Lumajang</li>
                    <li><b>Telepon:</b> (0334) 881174</li>
                    <li><b>Category:</b> Hotel</li>
                  </ul>
                  <a href="<?= base_url('konsumen/hotel')?>" class="btn btn-success">Booking</a>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="modal modal fade" id="lumajangmodal" style="width: 100%;" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Hotel Lumajang</h2>
                  <img style="width: 400px;" class="img-fluid d-block mx-auto" src="<?= base_url('assets/img/hotel/lumajang1.jpg') ?>" alt="">
                  <ul class="list-inline">
                    <li><b>Alamat:</b> Jl. Jendral Ahmad Yani, Tompokersan, Lumajang, Lumajang</li>
                    <li><b>Telepon:</b> (0334) 881314</li>
                    <li><b>Category:</b> Hotel</li>
                  </ul>
                  <a href="<?= base_url('konsumen/hotel')?>" class="btn btn-success">Booking</a>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="modal modal fade" id="primamodal" style="width: 100%;" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Prima Hotel</h2>
                  <img style="width: 400px;" class="img-fluid d-block mx-auto" src="<?= base_url('assets/img/hotel/prima1.jpg') ?>" alt="">
                  <ul class="list-inline">
                    <li><b>Alamat:</b> Jl. Ir Soekarno Hatta, Kutorenon, Sukodono, Lumajang</li>
                    <li><b>Telepon:</b> (0334) 883779</li>
                    <li><b>Category:</b> Hotel</li>
                  </ul>
                  <a href="<?= base_url('konsumen/hotel')?>" class="btn btn-success">Booking</a>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="modal modal fade" id="gmmodal2" style="width: 100%;" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Gajah Mada Hotel</h2>
                  <img style="width: 400px;" class="img-fluid d-block mx-auto" src="<?= base_url('assets/img/hotel/gm5.jpg') ?>" alt="">
                  <ul class="list-inline">
                    <li><b>Alamat:</b> Tompokersan, Lumajang, Lumajang</li>
                    <li><b>Telepon:</b> (0334) 881174</li>
                    <li><b>Category:</b> Hotel</li>
                  </ul>
                  <a href="<?= base_url('konsumen/hotel')?>" class="btn btn-success">Booking</a>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- modal login -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">akun</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row justify-content-center">
              <div class="col-6 text-center">
                <a class="btn btn-success" href="<?= base_url('auth/index') ?>" ><i class="fas fa-user"></i> Login</a>
              </div>
              <div class="col-6 text-center">
                <a class="btn btn-warning" href="<?= base_url('auth/logout') ?>" ><i class="fas fa-unlock-alt"></i> Logout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- modal logout -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar??</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">Logout</a>
              </div>
            </div>
          </div>
        </div>

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
