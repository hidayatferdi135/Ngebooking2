        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data User</h1>
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="col-12">
              
            <div class="card shadow mb-4">
            <div class="card-header py-3" style="background: linear-gradient(120deg, #3498db, #8e44ad);">
              <h5 class="m-0 font-weight-bold text-light">DataTables Hotel</h5>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <?= $this->session->flashdata('pesan'); ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center">
                      <th>#</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Gambar</th>
                      <th>Level</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($users as $d): ?>
                    <tr>
                      <td class="text-center"><?= $i ?></td>
                      <td class="text-center"><?= $d['nama_user']; ?></td>
                      <td class="text-center"><?= $d['email']; ?></td>
                      <td class="text-center"><img style="width: 80px;" src="<?= base_url('assets/img/user/'). $d['image']; ?>" alt=""></td>
                      <td class="text-center"><?= $d['nama_level']; ?></td>
                      <td class="text-center">
                        <a href="javascript:void(0)" onclick="show_user('<?= $d['id_user'] ?>')"  class="btn btn-warning"><i class="fas fa-search"></i></a>
                        <a href="<?= base_url('admin/hapus_user/'). $d['id_user']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                    
                  </tbody>
                </table>

                <!-- modal show -->
                <div class="modal fade" id="modal_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="exampleModalLabel"><i class="fas fa-user"></i> Detail User</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="#" id="form">
                        <div class="row justify-content-center">
                          <div class="col-8 text-center">
                            <img class="img-profile rounded-circle" style="width: 100px; height: 100px;" src="#" id="image" alt=""><br><br>
                          </div>
                          <div class="col-10 text-center">
                            <div class="container">
                              <div class="row">
                                <div class="col-4">
                                  <p>Nama :</p>
                                  <p>Email :</p>
                                </div>
                                <div class="col-8">
                                  <p><input type="text" readonly="" style="border: none; width: 100%" id="nama_user"></p>
                                  <p><input type="text" readonly="" style="border: none; width: 100%" id="email"></p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                    </div>
                  </div>
                </div>
              </div>

              <script>
                function show_user(id) {
                  save_method = 'update';
                  $('#form')[0].reset();
                  $('.form-group').removeClass('has-error');
                  var mymodal = $('#modal_user');
                  $.ajax({
                    url: "<?= site_url('admin/show_user/') ?>/" + id,
                    type: "GET",
                    dataType: "json",
                    success: function(data){
                      mymodal.find('.modal-body #id_user').val(data.id_user);
                      mymodal.find('.modal-body #nama_user').val(data.nama_user);
                      mymodal.find('.modal-body #email').val(data.email);
                      mymodal.find('.modal-body #nama_level').val(data.nama_level);
                      mymodal.find('.modal-body #image').attr('src','<?php echo base_url('assets/img/user/')?>'+ data.image);
                      $('#modal_user').modal('show');
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