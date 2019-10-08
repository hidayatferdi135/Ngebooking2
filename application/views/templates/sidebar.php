    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background-image: url('<?= base_url('assets/img/bg2.png') ?>'); background-size: cover; background-repeat: no-repeat;">

      <!-- Sidebar - Brand -->
      <div class="sidebar-heading"></div>
      <a class="sidebar-brand d-flex align-items-center justify-content-center" data-toggle="modal" data-target="#userModal" href="#">
        <div class="sidebar-brand-icon">
          <img class="img-profile-1 rounded-circle" style=" width: 65px; height: 65px;" src="<?= base_url('assets/img/user/').$user['image']; ?>">
          <br>
          <p class="text-gray-600 small " style="font-family: sans-serif; font-size: 10pt; margin-top: 15px;"><?= $user['nama_user']; ?></p>
        </div>
      </a>

      <!-- Divider -->
      <div class="sidebar-heading"></div>
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active1">
        <a class="nav-link" href="<?= base_url('admin/home') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span class="text-light">Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <?php
      $sm = "SELECT * FROM sub_menu WHERE id "; 
      $subMenu = $this->db->query($sm)->result_array();
       ?>
      <!-- sub menu -->
       <?php foreach ($subMenu as $sm): ?>
      <!-- Nav Item - Pages Collapse Menu -->
      <?php if ($title == $sm['title']):?>

      <li class="nav-item item active">
        <?php else: ?>
          <li class="nav-item item">
        <?php endif; ?>

        <a class="nav-link pb-0" href="<?= base_url($sm['url']); ?>">
          <i class="<?= $sm['icon']; ?>"></i>
          <span><?= $sm['title']; ?></span>
        </a>
      </li>

    </li>
        <?php endforeach; ?>

      <hr class="sidebar-divider d-none d-md-block">

      <div class="sidebar-heading">
        User
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsethree" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div id="collapsethree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="<?= base_url('auth/registration1') ?>">Registrasi</a>
            <a class="collapse-item" href="<?= base_url('auth/logout') ?>">Logout</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= base_url('auth/logout')?>">Logout</a>
        </div>
      </div>
    </div>
  </div>