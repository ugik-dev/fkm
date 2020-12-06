<div id="wrapper">

  <nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
      <ul class="nav metismenu" id="side-menu">
        <?= $this->load->view('Fragment/SidebarHeaderFragment', NULL, TRUE); ?>
        <li id="homepage">
                <a href="<?= base_url() ?>"><i class="fa fa-home"></i> <span class="nav-label">Home Page</span></a>
              </li>
        <!-- <li id="papan_pengumuman">
          <a href="<?= site_url('AdminController/papan_pengumuman') ?>"><i class="fa fa-newspaper"></i> <span class="nav-label">Papan Pengumuman</span></a>
        </li>
        <li id="news_post">
          <a href="<?= site_url('AdminController/news_post') ?>"><i class="fa fa-newspaper"></i> <span class="nav-label">News Post</span></a>
        </li>
        <li id="galery">
          <a href="<?= site_url('AdminController/galery') ?>"><i class="fa fa-newspaper"></i> <span class="nav-label">Galery</span></a>
        </li>
        <li id="page_content">
          <a href="<?= site_url('AdminController/page_content') ?>"><i class="fa fa-newspaper"></i> <span class="nav-label">Page</span></a>
        </li> -->
        <!-- <li id="kelola_user">
          <a href="<?= site_url('AdminController/kelola_user') ?>"><i class="fa fa-users-cog"></i> <span class="nav-label">Kelola User</span></a>
        </li> -->
        <li id="mahasiswaalumni">
          <a href="<?= site_url('AdminController/mahasiswaalumni') ?>"><i class="fa fa-users-cog"></i> <span class="nav-label">Mahasiswa dan Alumni</span></a>
        </li>
        <!-- <li id="struktur_pimpinan">
          <a href="<?= site_url('AdminController/struktur_pimpinan') ?>"><i class="fa fa-users-cog"></i> <span class="nav-label">Struktur Pimpinan</span></a>
        </li>

        <li id="tenaga_kependidikan">
          <a href="<?= site_url('AdminController/tenaga_kependidikan') ?>"><i class="fa fa-users-cog"></i> <span class="nav-label">Tenaga Kependidikan</span></a>
        </li>


        <li id="dosen_dan_tenaga_pendidik">
          <a href="<?= site_url('AdminController/dosen_dan_tenaga_pendidik') ?>"><i class="fa fa-users-cog"></i> <span class="nav-label">Dosen Dan Tenaga Pendidik</span></a>
        </li> -->


        <li id="logout">
          <a href="#" class="logout"><i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span></a>
        </li>
    </div>
  </nav>
  <script>
    $(document).ready(function() {});
  </script>