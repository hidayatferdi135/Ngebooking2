        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Hotel</h1>
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="col-md-12">
              
            <div class="card shadow mb-4">
            <div class="card-header py-3" style="background: linear-gradient(120deg, #3498db, #8e44ad);">
              <h5 class="m-0 font-weight-bold text-light">DataTables Hotel</h5>
            </div>
            <div class="card-body">
              <a href="#" data-toggle="modal" data-target="#addHotel" class="btn btn-warning"><i class="fas fa-plus mr-2"></i>Tambah Hotel</a>
              <div class="table-responsive"><br>
                <?= $this->session->flashdata('pesan'); ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center">
                      <th>#</th>
                      <th>Nama Hotel</th>
                      <th>Alamat Hotel</th>
                      <th>Gambar</th>
                      <th>no hotel</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($hotel as $h): ?>
                    <tr>
                      <td class="text-center"><?= $i ?></td>
                      <td class="text-center"><?= $h['nama_hotel']; ?></td>
                      <td class="text-center"><?= $h['alamat_hotel']; ?></td>
                      <td class="text-center"><img style="width: 80px;" src="<?= base_url('assets/img/hotel/'). $h['image']; ?>" alt=""></td>
                      <td class="text-center"><?= $h['no_hotel']; ?></td>
                      <td class="text-center">
                        <a href="javascript:void(0)" onclick="show_hotel('<?= $h['id_hotel'] ?>')"  class="btn btn-warning"><i class="fas fa-search"></i></a>
                        <a href="<?= base_url('admin/hapus_hotel/'). $h['id_hotel']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        <a href="" class="btn btn-success"><i class="fas fa-pen"></i></a>
                      </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                    
                  </tbody>
                </table>

                <!-- modal show -->
                <div class="modal fade" id="modal_hotel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="exampleModalLabel"><i class="fas fa-user"></i> Detail Hotel</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="#" id="form">
                        <div class="row justify-content-center">
                          <div class="col-md-7 my-3 text-center">
                            <img class="rounded-circle" style="width: 150px; height: 150px;" src="#" alt="" id="img_modal">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-5">
                            <span class="ml-2" style="width: 120px;">Nama Hotel</span><br>
                            <span class="ml-2" style="width: 120px;">Alamat Hotel</span><br>
                            <span class="ml-2" style="width: 120px;">Harga Deluxe</span><br>
                            <span class="ml-2" style="width: 120px;">Harga Deluxe Twin</span><br>
                            <span class="ml-2" style="width: 120px;">No Hotel</span><br>
                          </div>
                          <div class="col-md-7">
                            : <span><input type="text" style="border: none;" readonly="" id="nama_hotel"></span><br>
                            : <span><input type="text" style="border: none;" readonly="" id="alamat_hotel"></span><br>
                            : <span><input type="text" style="border: none;" readonly="" id="harga1"></span><br>
                            : <span><input type="text" style="border: none;" readonly="" id="harga2"></span><br>
                            : <span><input type="text" style="border: none;" readonly="" id="no_hotel"></span><br>
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
                function show_hotel(id) {
                  save_method = 'update';
                  $('#form')[0].reset();
                  $('.form-group').removeClass('has-error');
                  var mymodal = $('#modal_hotel');
                  $.ajax({
                    url: "<?= site_url('admin/show_hotel/') ?>/" + id,
                    type: "GET",
                    dataType: "json",
                    success: function(data){
                      mymodal.find('.modal-body #nama_hotel').val(data.nama_hotel);
                      mymodal.find('.modal-body #alamat_hotel').val(data.alamat_hotel);
                      mymodal.find('.modal-body #harga1').val(data.harga1);
                      mymodal.find('.modal-body #harga2').val(data.harga2);
                      mymodal.find('.modal-body #no_hotel').val(data.no_hotel);
                      mymodal.find('.modal-body #img_modal').attr('src','<?php echo base_url('assets/img/hotel')?>/'+data.image);
                      $('#modal_hotel').modal('show');
                    },
                    error: function(jqXHR, textStatus, errorThrown){
                      alert('error get data from ajax')
                    }
                  });
                }
              </script>

                <!-- Modal -->
                <div class="modal fade" id="addHotel" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Hotel</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="<?= base_url('admin/tambah_hotel') ?>" enctype="multipart/form-data" method="post">
                          <div class="form-group">
                            <label>Nama Hotel :</label>
                            <input type="text" name="nama_hotel" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Alamat Hotel :</label>
                            <input type="text" name="alamat_hotel" class="form-control">
                          </div>
                          <div class="form-group">
                            <label>Image :</label>
                            <div class="custom-file">
                              <input type="file" name="image" class="custom-file-input" id="customFile">
                              <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6">
                              <div class="form-group">
                                <label>Harga Deluxe :</label>
                                <input type="text" name="harga1" class="form-control">
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="form-group">
                                <label>Harga Deluxe Twin :</label>
                                <input type="text" name="harga2" class="form-control">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>No. Hotel :</label>
                            <input type="text" name="no_hotel" class="form-control">
                          </div>
                          <div class="row">
                            <div class="col-7">
                              <div class="form-group">
                                <label>Kategori :</label>
                                <select class="custom-select" name="kategori">
                                  <option selected>-- Pilih Kategori --</option>
                                  <option value="1">Hotel</option>
                                  <option value="2">Homestay</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-5">
                              <div class="form-group">
                                <label>Bintang :</label>
                                <input type="number" name="bintang" class="form-control">
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-6">
                                <input type="submit" class="btn btn-primary btn-block" value="Save">
                              </div>
                              <div class="col-6">
                                <button type="button" class="btn btn-secondary btn-block form-control" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>

                    <script>
                      $('.custom-file-input').on('change',function(){
                      let fileName = $(this).val().split('\\').pop();
                      $(this).next('.custom-file-label').addClass("selected").html(fileName);
                    })
                    </script>
                    </div>
                  </div>
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