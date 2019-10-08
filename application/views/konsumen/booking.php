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
      			<div class="card">
				  <div class="card-header">
				    Data Tamu
				  </div>
				  <div class="card-body">
				    <h5 class="card-title">Harap isi dengan lengkap</h5>
				    <form action="<?= base_url('konsumen/booking') ?>" method="post">
              <input type="text" class="form-control"
                
                      value="<?php   
                          function random($panjang_karakter)   
                          {   
                          $karakter = '1234567890';   
                          $string = '';   
                          for($i = 0; $i < $panjang_karakter; $i++) {   
                           $pos = rand(0, strlen($karakter)-1);   
                           $string .= $karakter{$pos};   
                          }   
                          return $string;   
                          }   
                         echo random(7);   
                         ?>"
                          name="kode_booking">
					  <div class="form-group">
					    <label>Nama Tamu</label>
					    <input type="text" name="nama_user" class="form-control">
					    <small class="form-text text-muted">isi nama tamu.</small>
					  </div>
					  <div class="form-group">
					    <label>Alamat</label>
					    <input type="text" name="alamat" class="form-control">
					    <small class="form-text text-muted">isi alamat anda dengan lengkap.</small>
					  </div>
					  <div class="form-group">
					    <label>No. Handphone</label>
					    <input type="text" name="no_hp" class="form-control">
					  </div>
					  <div class="form-group">
					    <label>Email</label>
					    <input name="email" type="text" class="form-control">
					    <small class="form-text text-muted">isi alamat email anda.</small>
					  </div>
					  <!-- data hotel -->
            <input type="hidden" value="<?= $id_hotel; ?>" name="id_hotel">
					  <input type="hidden" value="<?= $check_in; ?>" name="check_in">
            <input type="hidden" value="<?= $durasi; ?>" name="durasi">
            <input type="hidden" value="<?= $tipe; ?>" name="tipe">
					  <input type="hidden" value="
					  <?php 
				    	$h = $harga;
				    	$d = 0.1;
				    	$hitung = $harga * $d;
				    	$total = $harga + $hitung;

				    	echo $total;
				   	   ?>
					  " name="total">
					  <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
					</form>
				  </div>
				</div>
      		</div>
      		<div class="col-4">
      			<div class="card" style="width: 18rem;">
				  <div class="card-header">
				  	<div class="row">
				  		<div class="col-8">
				  			<h5 style="color: #0033ff;"><?= $nama_hotel ?></h5>
				  			<?php
		                     for ($i= 1; $i <= $bintang; $i++)
		                     {
		                        echo "<i style='font-size: 11pt;' class='fas fa-star text-warning'></i>";
		                     }
		                    ?><br>
				  		</div>
				  		<div class="col-4">
				  			<img style="width: 80px;" class="mr-1" src="<?= base_url('assets/img/hotel/'). $image; ?>" alt="">
				  		</div>
              <div class="col-12">
                <span style="color: #999999; font-size: 11pt;"><?= $alamat_hotel ?></span>
              </div>
				  	</div>
				  </div>
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item">
				    	<div class="row">
				    		<div class="col-6 text-left">
				    			<span style="color: #0033ff; font-size: 11pt;">Check-in</span><br>
				    			<span style="color: #0033ff; font-size: 11pt;">Durasi</span><br>
				    			<span style="color: #0033ff; font-size: 11pt;">Tipe</span>
				    		</div>
				    		<div class="col-6 text-right">
				    			<span style="color: #0033ff; font-size: 11pt;"><?= $check_in ?></span><br>
				    			<span style="color: #0033ff; font-size: 11pt;"><?= $durasi ?> malam</span><br>
                  <span style="color: #0033ff; font-size: 11pt;"><?= $tipe ?></span><br>
				    		</div>
				    	</div>
				    </li>
				    <li class="list-group-item">
				    	<div class="row">
				    		<div class="col-7">
				    			<span style="color: #0033ff; font-size: 11pt;">Harga Kamar</span><br>
				    			<span style="color: #00ff00; font-size: 10pt;">Pembatalan fee</span><br>
				    			<span style="color: #666666; font-size: 9pt;">ngebooking fee 10%</span><br>
				    		</div>
				    		<div class="col-5 text-right">
				    			<span style="color: #0033ff; font-size: 11pt;">Rp. <?= ($harga * $durasi) ?>,-</span><br>
                  <span style="color: #00ff00; font-size: 11pt;">Free</span><br>
				    			<span style="color: #ff3366; font-size: 11pt;">Rp. 
				    				<?php 
				    				$h = $harga * $durasi;
				    				$d = 0.05;
				    				$hitung = $h * $d;

				    				echo $hitung;
				    				 ?>
				    			</span>
				    		</div>
				    	</div>
				    </li>
				    <li class="list-group-item" style="background: #00cc33; color: white;">
				    	<div class="row">
				    		<div class="col-6">
				    			<span style="font-size: 14pt;">Total Harga:</span>
				    		</div>
				    		<div class="col-6 text-right">
				    			<span style="font-size: 14pt;">Rp. 
				    				<?php 
				    				$h = $harga * $durasi;
				    				$d = 0.1;
				    				$hitung = $h * $d;
				    				$total = $h + $hitung;

				    				echo $total;
				    				 ?>
				    			</span>
				    		</div>
				    	</div>
				    </li>
				  </ul>
				</div>
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
