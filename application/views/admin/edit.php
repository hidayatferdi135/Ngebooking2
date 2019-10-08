
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

          <div class="row">
          	<div class="col-lg-8">
          		<?= form_open_multipart('admin/edit'); ?>
          			<div class="form-group row">
          				<label for="email" class="col-sm-2 col-form-label">Email</label>
          				<div class="col-sm-10">
          					<input type="text" class="form-control" id="email" value="<?= $user['email']; ?>" name="email" readonly>
          				</div>
          			</div>
          			<div class="form-group row">
          				<label for="nama_user" class="col-sm-2 col-form-label">Full Name</label>
          				<div class="col-sm-10">
          					<input type="text" name="nama_user" class="form-control" id="nama_user" value="<?= $user['nama_user']; ?>">
                    <?= form_error('nama_user', '<small class="text-danger pl-3">','</small>'); ?>
          				</div>
          			</div>
          			<div class="form-group row">
          				<div class="col-sm-2">Pictures</div>
          				<div class="col-sm-10">
          					<div class="row">
          						<div class="col-sm-3">
          							<img src="<?= base_url('assets/img/user/'). $user['image']; ?>" name="image" class="img-thumbnail">
          						</div>
          						<div class="col-sm-9">
          							<div class="custom-file">
          								<input type="file" class="custom-file-input" name="image" id="image">
          								<label for="image" class="custom-file-label">Choose file</label>
          							</div>
          						</div>
          					</div>
          				</div>
          			</div>
          			<div class="form-group row justify-content-end">
          				<div class="col-sm-10">
          					<button type="submit" class="btn btn-primary">Edit</button>
          				</div>
          			</div>
          		</form>
          	</div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->