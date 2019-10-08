<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Regsitration</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('vendor/admin2/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('vendor/admin2/') ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>
<link href='<?= base_url('assets/img/logo.png') ?>' rel='shortcut icon'>
<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 col-lg-6 mx-auto shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" action="<?= base_url('auth/registration1'); ?>" method="post">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="nama_user" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="email" placeholder="Email Address">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="password1" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" name="password2" placeholder="Repeat Password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="image">
                    <label class="custom-file-label">Choose file</label>
                  </div>
                </div>
                <input type="submit"class="btn btn-primary btn-user btn-block" value="Register Account">
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url('auth/index'); ?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script>
      $('.custom-file-input').on('change',function(){
      let fileName = $(this).val().split('\\').pop();
      $(this).next('.custom-file-label').addClass("selected").html(fileName);
    })
    </script>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('vendor/admin2/') ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('vendor/admin2/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('vendor/admin2/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('vendor/admin2/') ?>js/sb-admin-2.min.js"></script>

</body>

</html>
