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
  <link href="<?= base_url('vendor/admin2/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('vendor/admin2/') ?>css/sb-admin-2.min.css" rel="stylesheet">
  <script src="<?= base_url('vendor/admin2/') ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('vendor/admin2/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- sweet alert -->
  <script src="<?= base_url("vendor/sweetalert/dist/sweetalert2.all.min.js") ?>"></script>
  <link rel="stylesheet" href="<?= base_url("vendor/sweetalert/dist/sweetalert2.min.css") ?>">
  <link rel="stylesheet" href="<?= base_url('vendor/admin2/css/style2.css') ?>">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <style type="text/css" media="print">
    .kembali{
      display: none;
    }
  </style>

</head>
  <link href='<?= base_url('assets/img/logo.png') ?>' rel='shortcut icon'>
  <body onload="print()" id="page-top">
            <!-- Begin Page Content -->
        <div class="container-fluid my-5">

          <!-- Page Heading -->
          <div class="text-center">
            <h1 style="font-family: Kaushan Script; color: black;">Ngebooking</h1>
            <img style="width: 10%;" src="<?= base_url('assets/img/logo.png') ?>" alt="">
          </div>

          <!-- Content Row -->
          <div class="row my-5">
            <div class="col-12">
              
            <div class="card shadow mb-4">
            <div class="card-header py-3" style="background: linear-gradient(120deg, #3498db, #8e44ad);">
              <h5 class="m-0 font-weight-bold text-light">DataTables Order</h5>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <?= $this->session->flashdata('pesan'); ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center">
                      <th>#</th>
                      <th>Kode Pesanan</th>
                      <th>Nama Tamu</th>
                      <th>No. Rek/Ovo/Gopay</th>
                      <th>Bukti</th>
                      <th>Status</th>                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pesanan as $p): ?>
                    <tr>
                      <td class="text-center"><?= $i ?></td>
                      <td class="text-center"><?= $p['kode_booking']; ?></td>
                      <td class="text-center"><?= $p['nama_user']; ?></td>
                      <td class="text-center"><?= $p['nomor']; ?></td>
                      <td class="text-center"><img style="width: 80px;" src="<?= base_url('assets/img/bukti/'). $p['bukti']; ?>" alt=""></td>
                      <td class="text-center"><?= $p['status']; ?></td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                    
                  </tbody>
                </table>

                <div class="text-center">
                  <a href="<?= base_url('admin/pesanan') ?>" class="btn btn-success kembali"><i class="fas fa-backward"></i> Kembali</a>
                </div>

              </div>
            </div>
          </div>  
            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
  </body>
<!-- Footer -->
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; RPLGen6Santuy 2019</span>
      </div>
    </div>
  </footer>
  <!-- End of Footer -->

  </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  
  <script src="<?= base_url('vendor/admin2/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= base_url('vendor/admin2/') ?>js/sb-admin-2.min.js"></script>
  <script src="<?= base_url('vendor/admin2/') ?>vendor/chart.js/Chart.min.js"></script>
  <script src="<?= base_url('vendor/admin2/') ?>js/demo/chart-area-demo.js"></script>
  <script src="<?= base_url('vendor/admin2/') ?>js/demo/chart-pie-demo.js"></script>

</body>

</html>
