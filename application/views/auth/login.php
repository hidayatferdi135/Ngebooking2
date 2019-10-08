<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ngebooking</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('vendor/admin2/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('vendor/admin2/css/sb-admin-2.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('vendor/admin2/css/style.css'); ?>" rel="stylesheet" type="text/css">

</head>
<link href='<?= base_url('assets/img/logo.png') ?>' rel='shortcut icon'>
<body style="background: url('<?= base_url('assets/img/bg-login.jpg') ?>'); background-size: cover;">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-6">

        <div class="card o-hidden border-0 shadow-lg my-5" style="background: rgba(0,0,0,0.6);">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <?= $this->session->flashdata('message'); ?>
                    <img style="width: 110px; height: 110px;" class="rounded-circle" src="<?= base_url('assets/img/logo.png') ?>" alt="">
                    <h2 class="text-warning" style="font-weight: 600;">Ngebooking</h2>
                  </div>
                    <form method="post" action="<?= base_url('auth/index'); ?>" class="user login-form">
                    <div class="txtb">
                      <input type="text" style="color: white;" id="email" name="email" autofocus="" placeholder="Enter your email address..." autocomplete="off" value="<?= set_value('email'); ?>">
                    </div>
                    <?= form_error('email', '<small class="text-danger pl-3">','</small>'); ?>
                    
                    <div class="txtb">
                      <input type="password" style="color: white;" id="password" placeholder="Your Password" name="password">
                    </div>
                        <input type="submit" class="logbtn" value="Login">
                  </form>

                  <script type="text/javascript">
                    $(".txtb input").on("focus", function() {
                      $(this).addClass("focus");
                    });

                    $(".txtb input").on("blur", function() {
                      if ($(this).val() == "")
                      $(this).removeClass("focus");
                    });
                  </script>
                  <div class="text-center">
                    <a class="small" href="<?= base_url('auth/registration') ?>">Create an Account!</a><br>
                    <a class="small" href="<?= base_url('konsumen/search') ?>">Back to home</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('vendor/admin2/') ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('vendor/admin2/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('vendor/admin2/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('vendor/admin2/') ?>js/sb-admin-2.min.js"></script>

</body>

</html>
