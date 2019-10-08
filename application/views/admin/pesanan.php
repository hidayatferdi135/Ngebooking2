        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Pesanan</h1>
            <a href="<?= base_url('admin/print/') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Cetak Laporan</a>
          </div>

          <!-- Content Row -->
          <div class="row">
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
                      <th>Nama Hotel</th>
                      <th>Tipe Kamar</th>
                      <th>Bukti</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pesanan as $p): ?>
                    <tr>
                      <td class="text-center"><?= $i ?></td>
                      <td class="text-center"><?= $p['kode_booking']; ?></td>
                      <td class="text-center"><?= $p['nama_user']; ?></td>
                      <td class="text-center"><?= $p['nama_hotel']; ?></td>
                      <td class="text-center"><?= $p['tipe']; ?></td>
                      <td class="text-center"><img style="width: 80px;" src="<?= base_url('assets/img/bukti/'). $p['bukti']; ?>" alt=""></td>
                      <td class="text-center"><?= $p['status']; ?></td>
                      <td class="text-center">
                        <a href="javascript:void(0)" onclick="show_pesanan('<?= $p['id_pesanan'] ?>')"  class="btn btn-warning"><i class="fas fa-check"></i></a>
                        <a href="<?= base_url('admin/hapus_pesanan/'). $p['id_pesanan']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        <a href="<?= base_url('admin/print1/'). $p['kode_booking'] ?>" class="btn btn-success"><i class="fas fa-print"></i></a>
                      </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                    
                  </tbody>
                </table>
                <!-- modal show -->
                <div class="modal fade" id="modal_pesanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="exampleModalLabel"><i class="fas fa-user"></i> Detail Pesanan</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="<?= base_url('admin/konfirmasi') ?>" method="POST" id="form">
                    <div class="modal-body">
                        <div class="row">
                          <div class="col-12">
                            <input type="hidden" name="id_pesanan" value="" id="id_pesanan">
                            <table>
                              <tr>
                                <td style="color: black; width: 150px;">Kode Pesanan</td>
                                <td>: <input type="text" id="kode_booking" value="" readonly style="border: none; width: 200px;"></td>
                              </tr>
                              <tr>
                                <td style="color: black; width: 100px;">Nama Tamu</td>
                                <td>: <input type="text" id="nama_user" value="" readonly style="border: none; width: 200px;"></td>
                              </tr>
                              <tr>
                                <td style="color: black; width: 100px;">Alamat Tamu</td>
                                <td>: <input type="text" id="alamat" value="" readonly style="border: none; width: 200px;"></td>
                              </tr>
                              <tr>
                                <td style="color: black; width: 100px;">No hp Tamu</td>
                                <td>: <input type="text" id="no_hp" value="" readonly style="border: none; width: 200px;"></td>
                              </tr>
                              <tr>
                                <td style="color: black; width: 90px;">Email</td>
                                <td>: <input type="text" id="email" value="" readonly style="border: none; width: 200px;"></td>
                              </tr>
                              <tr>
                                <td style="color: black; width: 100px;">Check in</td>
                                <td>: <input type="text" id="check_in" value="" readonly style="border: none; width: 200px;"></td>
                              </tr>
                              <tr>
                                <td style="color: black; width: 100px;">Durasi</td>
                                <td style="color: black;">: <input type="text" id="durasi" value="" readonly style="border: none; width: 15px;"> Malam</td>
                              </tr>
                              <tr>
                                <td style="color: black; width: 100px;">Tipe Kamar</td>
                                <td style="color: black;">: <input type="text" id="tipe" value="" readonly style="border: none; width: 200px;"></td>
                              </tr>
                              <tr>
                                <td style="color: black; width: 100px;">Total</td>
                                <td>: <input type="text" id="total" value="" readonly style="border: none; width: 200px;"></td>
                              </tr>
                              <tr>
                                <td style="color: black; width: 100px;">Nomor rek/e-money</td>
                                <td>: <input type="text" id="nomor" value="" readonly style="border: none; width: 200px;"></td>
                              </tr>
                              <input type="hidden" name="status" id="status" value="">
                            </table>
                          </div>
                        </div>
                          
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Konfirmasi</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>

              <script>
                function show_pesanan(id) {
                  save_method = 'update';
                  $('#form')[0].reset();
                  $('.form-group').removeClass('has-error');
                  var mymodal = $('#modal_pesanan');
                  $.ajax({
                    url: "<?= site_url('admin/show_pesanan/') ?>/" + id,
                    type: "GET",
                    dataType: "json",
                    success: function(data){
                      mymodal.find('.modal-body #id_pesanan').val(data.id_pesanan);
                      mymodal.find('.modal-body #kode_booking').val(data.kode_booking);
                      mymodal.find('.modal-body #nama_user').val(data.nama_user);
                      mymodal.find('.modal-body #alamat').val(data.alamat);
                      mymodal.find('.modal-body #no_hp').val(data.no_hp);
                      mymodal.find('.modal-body #email').val(data.email);
                      mymodal.find('.modal-body #nama_hotel').val(data.nama_hotel);
                      mymodal.find('.modal-body #tipe').val(data.tipe);
                      mymodal.find('.modal-body #check_in').val(data.check_in);
                      mymodal.find('.modal-body #durasi').val(data.durasi);
                      mymodal.find('.modal-body #jumlah').val(data.jumlah);
                      mymodal.find('.modal-body #total').val(data.total);
                      mymodal.find('.modal-body #nomor').val(data.nomor);
                      mymodal.find('.modal-body #status').val(data.status);
                      $('#modal_pesanan').modal('show');
                    },
                    error: function(jqXHR, textStatus, errorThrown){
                      alert('error get data from ajax')
                    }
                  });
                }
              </script>

              </div>
            </div>
          </div>  
            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->