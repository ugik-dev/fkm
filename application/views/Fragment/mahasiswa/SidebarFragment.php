<div id="wrapper">

  <nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
      <ul class="nav metismenu" id="side-menu">
        <?= $this->load->view('Fragment/SidebarHeaderFragment', NULL, TRUE); ?>
        <li id="homepage">
                <a href="<?= base_url() ?>"><i class="fa fa-home"></i> <span class="nav-label">Home Page</span></a>
              </li>
        <li id="dashboard">
          <a href="<?= site_url('MahasiswaController/') ?>"><i class="fa fa-home"></i> <span class="nav-label">Beranda</span></a>
        </li>
        <li id="data_skripsi">
          <a href="<?= site_url('MahasiswaController/data_skripsi') ?>"><i class="fa fa-book"></i> <span class="nav-label">Data Skripsi</span></a>
        </li>
              <li id="data_jurnal">
                <a href="<?= site_url('MahasiswaController/data_jurnal') ?>"><i class="fa fa-book"></i> <span class="nav-label">Data Jurnal</span></a>
              </li>
              <li id="data_jurnal">
                <a href="<?= site_url('MahasiswaController/data_jurnal') ?>"><i class="fa fa-note"></i> <span class="nav-label">Home Page</span></a>
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