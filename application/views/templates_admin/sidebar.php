 <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon ">
          <i class="fas fa-home"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Restoran</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('admin') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/kategori_menu') ?>">
          <i class="fas fa-fw fa-bars"></i>
          <span>Kategori Menu</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/menu') ?>">
          <i class="fas fa-fw fa-shopping-cart"></i>
          <span>Menu</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/gallery') ?>">
          <i class="fa fa-fw fa-file"></i>
          <span>Gallery</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/team') ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Team</span></a>
      </li>
      

    

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/booking') ?>">
          <i class="fas fa-fw fa-retweet"></i>
          <span>Booking</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/contact') ?>">
          <i class="fas fa-fw fa-envelope"></i>
          <span>Contact</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/testimoni') ?>">
          <i class="fas fa-fw fa-comments"></i>
          <span>Testimoni</span></a>
      </li>



       <!-- Divider -->
      <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fa fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">