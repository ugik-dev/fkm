<!--  -->
<script>
  // var lang_in = $('#lang_in');
  // document.cookie = "lang_set=in";
  // document.cookie = "lang_set=en";
</script>
<?php
// echo $this->session->userdata()['lang_set'];

// if(!empty($_COOKIE['lang_set'])){
//   if($_COOKIE['lang_set']=='in'){
//     $data['lang_set'] = 'in';
//     $_SESSION['lang_set'] = 'in';
//     $this->session->set_userdata($data);
//   }else{
//     $data['lang_set'] = 'en';
//     $this->session->set_userdata($data);
//   }
// }
// echo $this->session->userdata()['lang_set'];
if (empty($_SESSION)) {

  session_start();
}
if (!empty($_SESSION['lang_set'])) {
  if ($_SESSION['lang_set'] == 'in') {
    $_COOKIE['lang_set'] = 'in';
  } else {
    $_COOKIE['lang_set'] = 'en';
  }
}

if (empty($_COOKIE['lang_set'])) {
  $_COOKIE['lang_set'] = 'in';
  setcookie('lang_set', 'in', time() + (86400 * 30), "");
  $_SESSION['lang_set'] = 'in';
};

// if($_COOKIE['lang_set']=='in'){
//   $data['lang_set'] = 'in';
//   $this->session->set_userdata($data);
// }else{
//   $data['lang_set'] = 'en';
//   $this->session->set_userdata($data);
// }
?>
<script>
  // document.cookie = "lang_set=in";
</script>
<?php

$menus = menus_instance();
if ($_COOKIE['lang_set'] == 'in') { ?>

  <nav id="ub-header" class="navbar navbar-inverse navbar-ub navbar-sticky-top navbar-agustus">
    <div class='thetop'></div>
    <section class="navbar-main ">
      <section class="navbar-top  hidden-sm hidden-xs">
        <div class="container clearfix">
          <div class="pull-left">
            <div class="menu-usernav-container">
              <ul id="menu-usernav" class="menu">

                <!-- <li id="menu-item-348" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-348"><a href="<?= base_url() ?>information-for/pre-student/">Calon Mahasiswa</a></li> -->
                <li id="menu-item-349" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-349"><a href="<?= base_url() ?>college/">Mahasiswa</a></li>
                <li id="menu-item-190" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-190"><a href="http://iakmu.fkm.unsri.ac.id/">Alumni</a></li>
                <li id="menu-item-344" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-344"><a href="<?= base_url() ?>about/lecturer/">Dosen &amp; Tenaga Pendidik</a></li>
                <li id="menu-item-344" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-344"><a href="<?= base_url() ?>about/education-personnel/">Tenaga Kependidikan </a></li>

                <li id="search_content" class="item-searchform hidden menu-item menu-item-type-custom menu-item-object-custom menu-item-193"><a><button class="searchform-toggle btn btn-primary pull-right"><i class="fa fa-search"></i></button></a></li>
              </ul>
            </div>
          </div>
          <div class="pull-right">
            <div class="menu-topnav-container">
              <ul id="menu-topnav" class="menu">
                <li id="menu-item-183" class="qtranxs-lang-menu qtranxs-lang-menu-id menu-item menu-item-type-custom menu-item-object-custom current-menu-parent menu-item-has-children menu-item-183"><a title="Indonesia" href="#">Bahasa:&nbsp;<img alt="Indonesia" data-src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://ub.ac.id/wp-content/plugins/qtranslate-x/flags/id.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img alt="Indonesia" data-src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://ub.ac.id/wp-content/plugins/qtranslate-x/flags/id.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img alt="Indonesia" data-src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://ub.ac.id/wp-content/plugins/qtranslate-x/flags/id.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img alt="Indonesia" data-src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://ub.ac.id/wp-content/plugins/qtranslate-x/flags/id.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://ub.ac.id/wp-content/plugins/qtranslate-x/flags/id.png" alt="Indonesia" /></noscript></noscript></noscript></noscript></a>
                  <ul class="sub-menu">
                    <!-- <li id="lang_en" class="qtranxs-lang-menu-item qtranxs-lang-menu-item-en menu-item menu-item-type-custom menu-item-object-custom menu-item-2222"><a title="English"><img alt="English" data-src="<?= base_url() ?>assets/img/english-flag.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img alt="English" data-src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://ub.ac.id/wp-content/plugins/qtranslate-x/flags/gb.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://ub.ac.id/wp-content/plugins/qtranslate-x/flags/gb.png" alt="English" /></noscript></noscript>&nbsp;English</a></li> -->

                    <li id="lang_en" class="qtranxs-lang-menu-item qtranxs-lang-menu-item-en menu-item menu-item-type-custom menu-item-object-custom menu-item-2222"><a title="English"><img alt="English" data-src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://ub.ac.id/wp-content/plugins/qtranslate-x/flags/gb.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img alt="English" data-src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://ub.ac.id/wp-content/plugins/qtranslate-x/flags/gb.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://ub.ac.id/wp-content/plugins/qtranslate-x/flags/gb.png" alt="English" /></noscript></noscript>&nbsp;English</a></li>
                    <li id="lang_in" class="qtranxs-lang-menu-item qtranxs-lang-menu-item-id menu-item menu-item-type-custom menu-item-object-custom menu-item-2223"><a title="Indonesia" aria-current="page"><img alt="Indonesia" data-src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://ub.ac.id/wp-content/plugins/qtranslate-x/flags/id.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img alt="Indonesia" data-src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://ub.ac.id/wp-content/plugins/qtranslate-x/flags/id.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img alt="Indonesia" data-src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://ub.ac.id/wp-content/plugins/qtranslate-x/flags/id.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img alt="Indonesia" data-src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://ub.ac.id/wp-content/plugins/qtranslate-x/flags/id.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://ub.ac.id/wp-content/plugins/qtranslate-x/flags/id.png" alt="Indonesia" /></noscript></noscript></noscript></noscript>&nbsp;Indonesia</a></li>
                  </ul>
                </li>
                <li id="menu-item-202" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-202"><a href="http://lib.ugik-dev.com">Direktori FKM</a></li>
                <li id="menu-item-202" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-202"><a href="<?= base_url('login') ?>"><?php if (!empty($this->session->userdata()['username'])) {
                                                                                                                                                            echo $this->session->userdata()['nama'];
                                                                                                                                                          } else {
                                                                                                                                                            echo ' Login';
                                                                                                                                                          } ?></a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <div class="container">
        <div class="navbar-header"> <a href="<?= base_url() ?>" class="custom-logo-link" rel="home"><img width="275" height="75" alt="FAKULTAS KESEHATAN MASYARAKAT" data-src="<?= base_url('assets/img/fkm_logo.png') ?>" class="custom-logo lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="275" height="75" src="<?= base_url('assets/img/fkm_logo.png') ?>" class="custom-logo" alt="Universitas Brawijaya" /></noscript></a></div>
        <div class="navbar-right toggle-group clearfix">
          <button class="btn btn-default search-toggle" type="button">
            <i class="fa fa-search"></i></button>

          <button type="button" class="navbar-toggle collapsed btn btn-default" data-toggle="collapse" data-target="#ub-nav" aria-expanded="false"> <i class="fa fa-reorder"></i> </button>
        </div>
        <div class="collapse navbar-collapse navbar-ub-collapse" id="ub-nav">
          <div class="menu-primary-container">
            <ul id="menu-primary" class="nav navbar-nav ub-nav navbar-right">
              </li>
              <li id="menu-item-61" class="menu-about menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-61 dropdown"><a title="Tentang FKM-UNSRI" description="Sebuah perguruan tinggi di Sumatera Selatan telah ada sejak awal tahun 1950-an, yang dicetuskan dalam suatu kesempatan resepsi perayaan hari Kemerdekaan tanggal 17 Agustus 1952. Diprakarsai oleh beberapa orang pemuka masyarakat, menjelma menjadi kesepakatan untuk membentuk Panitia Fakultet Sumatera Selatan" href="<?= base_url() ?>/id/about/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Tentang FKM-UNSRI <i class="animated fa fa-angle-right"></i></a>
                <div class="menu-desc hidden-md-down">Sebuah perguruan tinggi di Sumatera Selatan telah ada sejak awal tahun 1950-an, yang dicetuskan dalam suatu kesempatan resepsi perayaan hari Kemerdekaan tanggal 17 Agustus 1952. Diprakarsai oleh beberapa orang pemuka masyarakat, menjelma menjadi kesepakatan untuk membentuk "Panitia Fakultet Sumatera Selatan".</div>
                <div class=" dropdown-menu">
                  <div class=" row block">
                    <div class=" col-lg-7 col-md-7 col-xs-12 pull-right sub-mobile">
                      <div class=" submenu-group">
                        <ul class=" ul-2" role="menu">
                          <li id="menu-item-705" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-705"><a title="Sejarah" href="<?= base_url() ?>about/history/">Sejarah FKM UNSRI</a></li>
                          <li id="menu-item-401" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-401"><a title="Lambang, Logo, Motto, dan Maskot" href="<?= base_url() ?>about/logo/">Makna Lambang</a></li>
                          <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a title="Visi dan Misi" href="<?= base_url() ?>about/vision-and-mission/">Visi dan Misi</a></li>
                          <li id="menu-item-708" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-708"><a title="Hymne dan Mars" href="<?= base_url() ?>about/senate/">Senat Fakultas</a></li>
                          <li id="menu-item-68" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68"><a title="Organisasi" href="<?= base_url() ?>about/structure/">Struktur Pimpinan</a></li>
                          <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a title="Kerjasama" href="<?= base_url() ?>about/lecturer/">Dosen dan Tenaga Pendidik</a></li>
                          <li id="menu-item-62" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-62"><a title="Akreditasi" href="<?= base_url() ?>about/accreditation/">Akreditasi</a></li>
                          <li id="menu-item-63" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63"><a title="Prestasi" href="<?= base_url() ?>about/achievements/">Prestasi</a></li>
                          <li id="menu-item-2687" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2687"><a title="Dokumen Resmi" href="<?= base_url() ?>about/education-personnel/">Tenaga Kependidikan FKM UNSRI</a></li>
                        </ul>
              </li>
              <li id="menu-item-72" class="menu-academy menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-72 dropdown"><a title="Akademik" description="deskripsi indonesia" href="<?= base_url() ?>id/academy/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Akademik <i class="animated fa fa-angle-right"></i></a>
                <div class="menu-desc hidden-md-down"></div>
                <div class=" dropdown-menu">
                  <div class=" row block">
                    <div class=" col-lg-7 col-md-7 col-xs-12 pull-right sub-mobile">
                      <div class=" submenu-group">
                        <ul class=" ul-2" role="menu">
                          <?php
                          foreach ($menus["academy"] as $menu) {
                            echo '<li id="menu-item-320" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-320"><a title="Seminar Nasional" href="' . base_url() . 'seminar/' . $menu['slug'] . '">' . $menu['berita_judul'] . '</a></li>';
                          } ?>
                          <li id="menu-item-68" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68"><a title="Kalender Akademik" href="<?= base_url() ?>academy/calendar/">Kalender Akademik</a></li>
                          <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a title="Penelitian" href="<?= base_url() ?>research">Penelitian</a></li>
                          <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a title="Panduan" href="<?= base_url() ?>academy/guide/">Panduan</a></li>
                        </ul>
              </li>
              <li id="menu-item-81" class="menu-campus menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-81 dropdown"><a title="Kehidupan Kampus" description="Fakultas Kesehatan Masyarakat Universitas Sriwijaya Gedung Dr. A.I. Mutholib, MPH - Kampus Unsri Indralaya, Ogan Ilir 30662 Jl.Palembang Prabumulih Km.32 Indralaya Sumatera Selatan - Indonesia." href="<?= base_url() ?>services/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Layanan <i class="animated fa fa-angle-right"></i></a>
                <div class="menu-desc hidden-md-down">Fakultas Kesehatan Masyarakat Universitas Sriwijaya<br>Gedung Dr. A.I. Mutholib, MPH - Kampus Unsri Indralaya, Ogan Ilir 30662<br>Jl.Palembang Prabumulih Km.32 Indralaya Sumatera Selatan - Indonesia.</div>
                <div class=" dropdown-menu">
                  <div class=" row block">
                    <div class=" col-lg-7 col-md-7 col-xs-12 pull-right sub-mobile">
                      <div class=" submenu-group">
                        <ul class=" ul-2" role="menu">

                          <?php foreach ($menus["services"] as $menu) {
                            if ($menu['tipe'] == 0)
                              echo '<li id="menu-item-320" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-320"><a title="' . $menu['berita_judul'] . '" href="' . base_url() . 'services/' . $menu['slug'] . '">' . $menu['berita_judul'] . '</a></li>';
                            else
                              echo '<li id="menu-item-320" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-320"><a title="' . $menu['berita_judul'] . '" href="'  . $menu['url'] . '">' . $menu['berita_judul'] . '</a></li>';
                          } ?>
                        </ul>
              </li>
              <li id="menu-item-112" class="menu-research menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-112 dropdown"><a title="Penelitian" description="Seminar" href="<?= base_url() ?>research/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Seminar <i class="animated fa fa-angle-right"></i></a>
                <div class="menu-desc hidden-md-down">Seminar</div>
                <div class=" dropdown-menu">
                  <div class=" row block">
                    <div class=" col-lg-7 col-md-7 col-xs-12 pull-right sub-mobile">
                      <div class=" submenu-group">
                        <ul class=" ul-2" role="menu">
                          <?php foreach ($menus["seminar"] as $menu) {
                            if ($menu['tipe'] == 0)
                              echo '<li id="menu-item-320" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-320"><a title="' . $menu['berita_judul'] . '" href="' . base_url() . 'seminar/' . $menu['slug'] . '">' . $menu['berita_judul'] . '</a></li>';
                            else
                              echo '<li id="menu-item-320" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-320"><a title="' . $menu['berita_judul'] . '" href="'  . $menu['url'] . '">' . $menu['berita_judul'] . '</a></li>';
                          } ?>
                        </ul>
              </li>

              <li id="menu-item-485" class="hidden-lg hidden-md menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-485 dropdown"><a title="Bahasa" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Bahasa <i class="animated fa fa-angle-right"></i></a>
                <div class=" dropdown-menu">
                  <div class=" row block">
                    <div class=" col-lg-7 col-md-7 col-xs-12 pull-right sub-mobile">
                      <div class=" submenu-group">
                        <ul class=" ul-2" role="menu">
                          <li id="lang_in_2" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-486"><a title="Indonesia">Indonesia</a></li>
                          <li id="lang_en_2" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-487"><a title="English">English</a></li>
                        </ul>
              <li id="menu-item-485" class="hidden-lg hidden-md menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-485"><a title="Login" href="<?= base_url('login') ?>" data-toggle="" aria-haspopup="true"><?php if (!empty($this->session->userdata()['username'])) {
                                                                                                                                                                                                                                                      echo $this->session->userdata()['nama'];
                                                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                                                      echo ' Login';
                                                                                                                                                                                                                                                    } ?></a>
              <li id="menu-item-485" class="hidden-lg hidden-md menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-485"><a href="http://lib.ugik-dev.com">Direktori FKM</a></li>


            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="search-row" class="search-row section-search">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
            <form role="search" method="get" class="search-form input-group" action="<?= base_url('search') ?>"> <input type="text" class="search-field form-control" placeholder="Search …" value="" name="val" title="Cari untuk:" /> <span class="input-group-btn"> <button class="btn btn-default" type="submit" value="Cari">Cari!</button> </span></form>
          </div>
        </div>
      </div>
    </section>
  </nav>
<?php } else { ?>
  <nav id="ub-header" class="navbar navbar-inverse navbar-ub navbar-sticky-top navbar-agustus">
    <div class='thetop'></div>
    <section class="navbar-main ">
      <section class="navbar-top  hidden-sm hidden-xs">
        <div class="container clearfix">
          <div class="pull-left">
            <div class="menu-usernav-container">
              <ul id="menu-usernav" class="menu">
                <!-- <li id="menu-item-348" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-348"><a href="<?= base_url() ?>information-for/pre-student/">Calon Mahasiswa</a></li> -->
                <li id="menu-item-349" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-349"><a href="<?= base_url() ?>college/">College </a></li>
                <li id="menu-item-190" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-190"><a href="http://iakmu.fkm.unsri.ac.id/">Alumni</a></li>
                <li id="menu-item-344" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-344"><a href="<?= base_url() ?>about/lecturer/">Lecturers &amp; Educators</a></li>
                <li id="menu-item-344" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-344"><a href="<?= base_url() ?>about/education-personnel/">Education Personel </a></li>

                <li id="menu-item-193" class="item-searchform hidden menu-item menu-item-type-custom menu-item-object-custom menu-item-193"><a><button class="searchform-toggle btn btn-primary pull-right"><i class="fa fa-search"></i></button></a></li>
              </ul>
            </div>
          </div>
          <div class="pull-right">
            <div class="menu-topnav-container">
              <ul id="menu-topnav" class="menu">
                <li id="menu-item-183" class="qtranxs-lang-menu qtranxs-lang-menu-id menu-item menu-item-type-custom menu-item-object-custom current-menu-parent menu-item-has-children menu-item-183"><a title="Indonesia" href="#">Bahasa:&nbsp;<img alt="Indonesia" data-src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://ub.ac.id/wp-content/plugins/qtranslate-x/flags/id.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img alt="Indonesia" data-src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://ub.ac.id/wp-content/plugins/qtranslate-x/flags/id.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img alt="Indonesia" data-src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://ub.ac.id/wp-content/plugins/qtranslate-x/flags/id.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img alt="Indonesia" data-src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://ub.ac.id/wp-content/plugins/qtranslate-x/flags/id.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://ub.ac.id/wp-content/plugins/qtranslate-x/flags/id.png" alt="Indonesia" /></noscript></noscript></noscript></noscript></a>
                  <ul class="sub-menu">
                    <li id="lang_en" class="qtranxs-lang-menu-item qtranxs-lang-menu-item-en menu-item menu-item-type-custom menu-item-object-custom menu-item-2222"><a title="English"><img alt="English" data-src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://ub.ac.id/wp-content/plugins/qtranslate-x/flags/gb.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img alt="English" data-src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://ub.ac.id/wp-content/plugins/qtranslate-x/flags/gb.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://ub.ac.id/wp-content/plugins/qtranslate-x/flags/gb.png" alt="English" /></noscript></noscript>&nbsp;English</a></li>
                    <li id="lang_in" class="qtranxs-lang-menu-item qtranxs-lang-menu-item-id menu-item menu-item-type-custom menu-item-object-custom menu-item-2223"><a title="Indonesia" aria-current="page"><img alt="Indonesia" data-src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://ub.ac.id/wp-content/plugins/qtranslate-x/flags/id.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img alt="Indonesia" data-src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://ub.ac.id/wp-content/plugins/qtranslate-x/flags/id.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img alt="Indonesia" data-src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://ub.ac.id/wp-content/plugins/qtranslate-x/flags/id.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img alt="Indonesia" data-src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://ub.ac.id/wp-content/plugins/qtranslate-x/flags/id.png" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://ub.ac.id/wp-content/plugins/qtranslate-x/flags/id.png" alt="Indonesia" /></noscript></noscript></noscript></noscript>&nbsp; Indonesia</a></li>
                  </ul>
                </li>
                <li id="menu-item-202" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-202"><a href="http://lib.fkm.unsri.ac.id">Direktori FKM</a></li>
                <li id="menu-item-202" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-202"><a href="<?= base_url('login') ?>"><?php if (!empty($this->session->userdata()['username'])) {
                                                                                                                                                            echo $this->session->userdata()['nama'];
                                                                                                                                                          } else {
                                                                                                                                                            echo ' Login';
                                                                                                                                                          } ?></a></li>

              </ul>
            </div>
          </div>
        </div>
      </section>
      <div class="container">
        <div class="navbar-header"> <a href="<?= base_url() ?>" class="custom-logo-link" rel="home"><img width="275" height="75" alt="PUBLIC HEALTH FACULTY" data-src="<?= base_url('assets/img/fkm_logo.png') ?>" class="custom-logo lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="275" height="75" src="<?= base_url('assets/img/fkm_logo.png') ?>" class="custom-logo" alt="Universitas Brawijaya" /></noscript></a></div>
        <div class="navbar-right toggle-group clearfix">
          <button class="btn btn-default search-toggle" type="button">
            <i class="fa fa-search"></i></button>

          <button type="button" class="navbar-toggle collapsed btn btn-default" data-toggle="collapse" data-target="#ub-nav" aria-expanded="false"> <i class="fa fa-reorder"></i> </button>
        </div>
        <div class="collapse navbar-collapse navbar-ub-collapse" id="ub-nav">
          <div class="menu-primary-container">
            <ul id="menu-primary" class="nav navbar-nav ub-nav navbar-right">
              </li>
              <li id="menu-item-61" class="menu-about menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-61 dropdown"><a title="Tentang FKM-UNSRI" description="A tertiary institution in South Sumatra has existed since the early 1950s, which was sparked at a reception to celebrate Independence Day on 17 August 1952. Initiated by several community leaders, it was transformed into an agreement to form a South Sumatra Facultet Committee" href="<?= base_url() ?>/id/about/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">About FKM-UNSRI <i class="animated fa fa-angle-right"></i></a>
                <div class="menu-desc hidden-md-down">A tertiary institution in South Sumatra has existed since the early 1950s, which was sparked at a reception to celebrate Independence Day on 17 August 1952. Initiated by several community leaders, it was transformed into an agreement to form a "South Sumatra Facultet Committee".</div>
                <div class=" dropdown-menu">
                  <div class=" row block">
                    <div class=" col-lg-7 col-md-7 col-xs-12 pull-right sub-mobile">
                      <div class=" submenu-group">
                        <ul class=" ul-2" role="menu">
                          <li id="menu-item-705" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-705"><a title="History" href="<?= base_url() ?>about/history/">History FKM UNSRI</a></li>
                          <li id="menu-item-401" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-401"><a title="Meaning of Symbol" href="<?= base_url() ?>about/logo/">Meaning of Symbol</a></li>
                          <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a title="Vision and Mission" href="<?= base_url() ?>about/vision-and-mission/">Vision dan Mission</a></li>
                          <li id="menu-item-708" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-708"><a title="Faculty Senate" href="<?= base_url() ?>about/senate/">Faculty Senate</a></li>
                          <li id="menu-item-68" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68"><a title="Leadership Structure" href="<?= base_url() ?>about/structure/">Leadership Structure</a></li>
                          <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a title="Lecturers and Educators" href="<?= base_url() ?>about/lecturer/">Lecturers and Educators</a></li>
                          <li id="menu-item-62" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-62"><a title="Acderitation" href="<?= base_url() ?>about/accreditation/">Acderitation</a></li>
                          <li id="menu-item-63" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63"><a title="Achievements" href="<?= base_url() ?>about/achievements/">Achievements</a></li>
                          <li id="menu-item-2687" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2687"><a title="Education Personnel" href="<?= base_url() ?>about/education-personnel/">Education Personnel FKM UNSRI</a></li>
                        </ul>
              </li>
              <li id="menu-item-72" class="menu-academy menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-72 dropdown"><a title="Academic" description="deskripsi indonesia" href="<?= base_url() ?>id/academy/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Academic <i class="animated fa fa-angle-right"></i></a>
                <div class="menu-desc hidden-md-down">Academy Public Healty Faculty</div>
                <div class=" dropdown-menu">
                  <div class=" row block">
                    <div class=" col-lg-7 col-md-7 col-xs-12 pull-right sub-mobile">
                      <div class=" submenu-group">
                        <ul class=" ul-2" role="menu">

                          <?php foreach ($menus["academy"] as $menu) {
                            if ($menu['tipe'] == 0)
                              echo '<li id="menu-item-320" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-320"><a title="' . $menu['berita_judul_en'] . '" href="' . base_url() . 'academy/' . $menu['slug'] . '">' . $menu['berita_judul_en'] . '</a></li>';
                            else
                              echo '<li id="menu-item-320" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-320"><a title="' . $menu['berita_judul_en'] . '" href="'  . $menu['url'] . '">' . $menu['berita_judul_en'] . '</a></li>';
                          } ?> <li id="menu-item-68" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68"><a title="Academic Calendar" href="<?= base_url() ?>academy/calendar/">Academic Calendar </a></li>
                          <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a title="Research" href="<?= base_url() ?>research">Reserach</a></li>

                          <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a title="Guide" href="<?= base_url() ?>academy/guide/">Guide</a></li>
                        </ul>
              </li>
              <li id="menu-item-81" class="menu-campus menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-81 dropdown"><a title="Services" description="Faculty of Public Health, Sriwijaya University Dr. Building A.I. Mutholib, MPH - Unsri Indralaya Campus, Ogan Ilir 30662 Jl. Palembang Prabumulih Km.32 Indralaya South Sumatra - Indonesia.." href="<?= base_url() ?>services/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Services <i class="animated fa fa-angle-right"></i></a>
                <div class="menu-desc hidden-md-down">Faculty of Public Health, Sriwijaya University <br> Dr. Building A.I. Mutholib, MPH - Unsri Indralaya Campus, Ogan Ilir 30662 <br> Jl. Palembang Prabumulih Km.32 Indralaya South Sumatra - Indonesia.</div>
                <div class=" dropdown-menu">
                  <div class=" row block">
                    <div class=" col-lg-7 col-md-7 col-xs-12 pull-right sub-mobile">
                      <div class=" submenu-group">
                        <ul class=" ul-2" role="menu">
                          <?php foreach ($menus["services"] as $menu) {
                            if ($menu['tipe'] == 0)
                              echo '<li id="menu-item-320" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-320"><a title="' . $menu['berita_judul_en'] . '" href="' . base_url() . 'services/' . $menu['slug'] . '">' . $menu['berita_judul_en'] . '</a></li>';
                            else
                              echo '<li id="menu-item-320" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-320"><a title="' . $menu['berita_judul_en'] . '" href="'  . $menu['url'] . '">' . $menu['berita_judul_en'] . '</a></li>';
                          } ?>
                        </ul>
              </li>
              <li id="menu-item-112" class="menu-research menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-112 dropdown"><a title="Colloquium" description="Colloquium" href="<?= base_url() ?>research/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Colloquium <i class="animated fa fa-angle-right"></i></a>
                <div class="menu-desc hidden-md-down">Colloquium</div>
                <div class=" dropdown-menu">
                  <div class=" row block">
                    <div class=" col-lg-7 col-md-7 col-xs-12 pull-right sub-mobile">
                      <div class=" submenu-group">
                        <ul class=" ul-2" role="menu">
                          <?php foreach ($menus["seminar"] as $menu) {
                            if ($menu['tipe'] == 0)
                              echo '<li id="menu-item-320" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-320"><a title="' . $menu['berita_judul_en'] . '" href="' . base_url() . 'seminar/' . $menu['slug'] . '">' . $menu['berita_judul_en'] . '</a></li>';
                            else
                              echo '<li id="menu-item-320" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-320"><a title="' . $menu['berita_judul_en'] . '" href="'  . $menu['url'] . '">' . $menu['berita_judul_en'] . '</a></li>';
                          } ?>
                        </ul>
              </li>
              <li id="menu-item-485" class="hidden-lg hidden-md menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-485 dropdown"><a title="Directory" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Language <i class="animated fa fa-angle-right"></i></a>
                <!-- <div class="menu-desc hidden-md-down"></div> -->
                <div class=" dropdown-menu">
                  <div class=" row block">
                    <div class=" col-lg-7 col-md-7 col-xs-12 pull-left sub-mobile">
                      <div class=" submenu-group">
                        <ul class=" ul-2" role="menu">

                          <li id="lang_in_2" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-486"><a title="Indonesia">Indonesia</a></li>
                          <li id="lang_en_2" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-487"><a title="English">English</a></li>
                        </ul>
              <li id="menu-item-485" class="hidden-lg hidden-md menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-485"><a title="Login" href="<?= base_url('login') ?>" data-toggle="" aria-haspopup="true">Login <i class="animated fa fa-angle-right"></i></a>
                <!-- <div class="menu-desc hidden-md-down"></div> -->

            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="search-row" class="search-row section-search">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
            <form role="search" method="get" class="search-form input-group" action="<?= base_url('search') ?>"> <input type="text" class="search-field form-control" placeholder="Search …" value="" name="val" title="Cari untuk:" /> <span class="input-group-btn"> <button class="btn btn-default" type="submit" value="Cari">Go!</button> </span></form>
          </div>
        </div>
      </div>
    </section>
  </nav>
<?php } ?>

<style>
  #ub-header>section.navbar-main {
    /* padding-right: 15px; */
    /* padding-left: 15px; */
    /* width: auto; */
    /* border-top: 0; */
    /* position: static; */
    font-size: 14px;
    line-height: 1.42857143;
    /* opacity: 0.1 !important; */
    /* color: #cd94d6 !important; */
    background-color: rgba(155, 0, 158, 0.0) !important;
    font-family: Roboto, sans-serif;
    box-sizing: border-box;
    display: block !important;
    height: auto !important;
    padding-bottom: 0;
    overflow: visible !important;
    margin-right: 0;
    margin-left: 0;
    border-color: #cd94d6;
    box-shadow: none !important;

  }

  #ub-header>section.navbar-main:hover {

    background-color: rgba(155, 0, 158, 0.5) !important;
  }

  .navbar-top .container :hover {
    border-top: 0;
    font-size: 14px;
    font-family: Roboto, sans-serif;
    text-shadow: 2px 2px #9140a3;
    height: auto !important;
    padding-bottom: 0;
    margin-right: 0;
    margin-left: 0;
  }
</style>

<script>
  var lang_in = $('#lang_in');
  var lang_en = $('#lang_en');
  lang_in.on('click', (ev) => {
    document.cookie = "lang_set=in";
    sessionStorage.setItem("lang_set", "in");
    location.reload();
  });
  lang_en.on('click', (ev) => {
    document.cookie = "lang_set=en";
    sessionStorage.setItem("lang_set", "en");
    location.reload();
  });

  var lang_in_2 = $('#lang_in_2');
  var lang_en_2 = $('#lang_en_2');
  lang_in_2.on('click', (ev) => {
    document.cookie = "lang_set=in";
    sessionStorage.setItem("lang_set", "in");
    location.reload();
  });
  lang_en_2.on('click', (ev) => {
    document.cookie = "lang_set=en";
    sessionStorage.setItem("lang_set", "en");
    location.reload();
  });

  var search_content = $('#search_content');
  search_content.on('click', (e) => {
    console.log('sr')
  })
</script>