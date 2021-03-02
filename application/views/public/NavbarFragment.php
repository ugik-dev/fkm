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
<?php if ($_COOKIE['lang_set'] == 'in') { ?>

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
        <div class="navbar-header"> <a href="<?= site_url() ?>" class="custom-logo-link" rel="home"><img width="275" height="75" alt="FAKULTAS KESEHATAN MASYARAKAT" data-src="<?= base_url('assets/img/fkm_logo.png') ?>" class="custom-logo lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="275" height="75" src="<?= base_url('assets/img/fkm_logo.png') ?>" class="custom-logo" alt="Universitas Brawijaya" /></noscript></a></div>
        <div class="navbar-right toggle-group clearfix">
          <button class="btn btn-default search-toggle" type="button">
            <i class="fa fa-search"></i></button>

          <button type="button" class="navbar-toggle collapsed btn btn-default" data-toggle="collapse" data-target="#ub-nav" aria-expanded="false"> <i class="fa fa-reorder"></i> </button></div>
        <div class="collapse navbar-collapse navbar-ub-collapse" id="ub-nav">
          <div class="menu-primary-container">
            <ul id="menu-primary" class="nav navbar-nav ub-nav navbar-right">
              </li>
              <li id="menu-item-61" class="menu-about menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-61 dropdown"><a title="Tentang FKM-UNSRI" description="Sebuah perguruan tinggi di Sumatera Selatan telah ada sejak awal tahun 1950-an, yang dicetuskan dalam suatu kesempatan resepsi perayaan hari Kemerdekaan tanggal 17 Agustus 1952. Diprakarsai oleh beberapa orang pemuka masyarakat, menjelma menjadi kesepakatan untuk membentuk Panitia Fakultet Sumatera Selatan" href="<?= site_url() ?>/id/about/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Tentang FKM-UNSRI <i class="animated fa fa-angle-right"></i></a>
                <div class="menu-desc hidden-md-down">Sebuah perguruan tinggi di Sumatera Selatan telah ada sejak awal tahun 1950-an, yang dicetuskan dalam suatu kesempatan resepsi perayaan hari Kemerdekaan tanggal 17 Agustus 1952. Diprakarsai oleh beberapa orang pemuka masyarakat, menjelma menjadi kesepakatan untuk membentuk "Panitia Fakultet Sumatera Selatan".</div>
                <div class=" dropdown-menu">
                  <div class=" row block">
                    <div class=" col-lg-7 col-md-7 col-xs-12 pull-right sub-mobile">
                      <div class=" submenu-group">
                        <ul class=" ul-2" role="menu">
                          <li id="menu-item-705" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-705"><a title="Sejarah" href="<?= site_url() ?>about/history/">Sejarah FKM UNSRI</a></li>
                          <li id="menu-item-401" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-401"><a title="Lambang, Logo, Motto, dan Maskot" href="<?= site_url() ?>about/logo/">Makna Lambang</a></li>
                          <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a title="Visi dan Misi" href="<?= site_url() ?>about/vision-and-mission/">Visi dan Misi</a></li>
                          <li id="menu-item-708" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-708"><a title="Hymne dan Mars" href="<?= site_url() ?>about/senate/">Senat Fakultas</a></li>
                          <li id="menu-item-68" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68"><a title="Organisasi" href="<?= site_url() ?>about/structure/">Struktur Pimpinan</a></li>
                          <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a title="Kerjasama" href="<?= site_url() ?>about/lecturer/">Dosen dan Tenaga Pendidik</a></li>
                          <li id="menu-item-62" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-62"><a title="Akreditasi" href="<?= site_url() ?>about/accreditation/">Akreditasi</a></li>
                          <li id="menu-item-63" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63"><a title="Prestasi" href="<?= site_url() ?>about/achievements/">Prestasi</a></li>
                          <li id="menu-item-2687" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2687"><a title="Dokumen Resmi" href="<?= site_url() ?>about/education-personnel/">Tenaga Kependidikan FKM UNSRI</a></li>
                        </ul>
              </li>
              <li id="menu-item-72" class="menu-academy menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-72 dropdown"><a title="Akademik" description="deskripsi indonesia" href="<?= site_url() ?>id/academy/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Akademik <i class="animated fa fa-angle-right"></i></a>
                <div class="menu-desc hidden-md-down">deskripsi bar akademik</div>
                <div class=" dropdown-menu">
                  <div class=" row block">
                    <div class=" col-lg-7 col-md-7 col-xs-12 pull-right sub-mobile">
                      <div class=" submenu-group">
                        <ul class=" ul-2" role="menu">
                          <li id="menu-item-705" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-705"><a title="Program Studi Ilmu Kesehatan Masyarakat (S1)" href="<?= site_url() ?>academy/program-1/">Program Studi Ilmu Kesehatan Masyarakat (S1)</a></li>
                          <li id="menu-item-401" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-401"><a title="Program Studi Gizi (S1)" href="<?= site_url() ?>academy/program-2/">Program Studi Gizi (S1)</a></li>
                          <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a title="Program Studi Kesehatan Lingkungan (S1)" href="<?= site_url() ?>academy/program-3/">Program Studi Kesehatan Lingkungan (S1)</a></li>
                          <li id="menu-item-708" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-708"><a title="Program Studi Ilmu Kesehatan Masyarakat (S2)" href="<?= site_url() ?>academy/program-4/">Program Studi Ilmu Kesehatan Masyarakat (S2)</a></li>
                          <li id="menu-item-68" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68"><a title="Kalender Akademik" href="<?= site_url() ?>academy/calendar/">Kalender Akademik</a></li>
                          <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a title="Penelitian" href="<?= site_url() ?>research">Penelitian</a></li>
                          <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a title="Panduan" href="<?= site_url() ?>academy/guide/">Panduan</a></li>
                        </ul>
              </li>
              <li id="menu-item-81" class="menu-campus menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-81 dropdown"><a title="Kehidupan Kampus" description="Fakultas Kesehatan Masyarakat Universitas Sriwijaya Gedung Dr. A.I. Mutholib, MPH - Kampus Unsri Indralaya, Ogan Ilir 30662 Jl.Palembang Prabumulih Km.32 Indralaya Sumatera Selatan - Indonesia." href="<?= base_url() ?>services/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Layanan <i class="animated fa fa-angle-right"></i></a>
                <div class="menu-desc hidden-md-down">Fakultas Kesehatan Masyarakat Universitas Sriwijaya<br>Gedung Dr. A.I. Mutholib, MPH - Kampus Unsri Indralaya, Ogan Ilir 30662<br>Jl.Palembang Prabumulih Km.32 Indralaya Sumatera Selatan - Indonesia.</div>
                <div class=" dropdown-menu">
                  <div class=" row block">
                    <div class=" col-lg-7 col-md-7 col-xs-12 pull-right sub-mobile">
                      <div class=" submenu-group">
                        <ul class=" ul-2" role="menu">
                          <li id="menu-item-423" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-423"><a title="Kontak Kami" href="<?= base_url() ?>services/contact/">Kontak Kami</a></li>
                          <li id="menu-item-423" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-423"><a title="Perpustakaan" href="<?= base_url() ?>services/library/">Perpustakaan</a></li>

                          <li id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83">
                            <a title="Sistem Informasi Akademik" href="https://akademik.unsri.ac.id//">
                              Sistem Informasi Akademik
                            </a></li>
                          <li id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83">
                            <a title="Jurnal Ilmu Kesehatan Masyarakat" href="http://www.jikm.unsri.ac.id/index.php/jikm">
                              Jurnal Ilmu Kesehatan Masyarakat
                            </a></li>
                          <li id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83">
                            <a title="IKAFKM" href="http://iakmu.fkm.unsri.ac.id/">
                              IKAFKM
                            </a></li>
                          <li id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83">
                            <a title="Unit Pengembangan Pendidikan dan Penjaminan Mutu (UP3M)" href="<?= base_url() . 'services/up3m' ?>">
                              Unit Pengembangan Pendidikan dan Penjaminan Mutu (UP3M)
                            </a></li>
                          <li id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83">
                            <a title="UPPM" href="<?= base_url() . 'services/uppm' ?>">
                              UPPM
                            </a></li>
                          <li id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83">
                            <a title="Fasilitas" href="<?= base_url() . 'services/facilities' ?>">
                              Fasilitas
                            </a></li>
                          <li id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83">
                            <a title="Laboratorium Kesmas Terpadu" href="<?= base_url() . 'services/lab-fkm' ?>">
                              Laboratorium Kesmas Terpadu
                            </a></li>
                          <li id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83">
                            <a title="Laboratorium Multimedia" href="<?= base_url() . 'services/lab-multimedia' ?>">
                              Laboratorium Multimedia
                            </a></li>
                          <li id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83">
                            <a title="Komisi Etik Penelitian Kesehatan (KEPK)" href="http://iakmu.fkm.unsri.ac.id/">
                              Komisi Etik Penelitian Kesehatan (KEPK)
                            </a></li>
                          <li id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83">
                            <a title="SKPI (Surat Keterangan Pendamping Ijazah)" href="http://iakmu.fkm.unsri.ac.id/">
                              SKPI (Surat Keterangan Pendamping Ijazah)
                            </a></li>
                        </ul>
              </li>
              <li id="menu-item-112" class="menu-research menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-112 dropdown"><a title="Penelitian" description="Seminar" href="<?= base_url() ?>research/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Seminar <i class="animated fa fa-angle-right"></i></a>
                <div class="menu-desc hidden-md-down">Seminar</div>
                <div class=" dropdown-menu">
                  <div class=" row block">
                    <div class=" col-lg-7 col-md-7 col-xs-12 pull-right sub-mobile">
                      <div class=" submenu-group">
                        <ul class=" ul-2" role="menu">
                          <li id="menu-item-320" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-320"><a title="Seminar Nasional" href="<?= base_url() ?>seminar/seminar-nasional/">Seminar Nasional</a></li>
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

                <!-- 
              </li>
              <li id="menu-item-2229" class="hidden-lg hidden-md hidden-md-down menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2229 dropdown"><a title="Services" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Services <i class="animated fa fa-angle-right"></i></a>
                <div class="menu-desc hidden-md-down"></div>
                <div class=" dropdown-menu">
                  <div class=" row block">
                    <div class=" col-lg-7 col-md-7 col-xs-12 pull-right sub-mobile">
                      <div class=" submenu-group">
                        <ul class=" ul-2" role="menu">
                          <li id="menu-item-2230" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2230"><a title="Gapura FKM-UNSRI" href="https://gapura.ub.ac.id/">Gapura FKM-UNSRI</a></li>
                          <li id="menu-item-2231" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2231"><a title="Sertifikasi IT" href="https://sertifikasi.ub.ac.id/">Sertifikasi IT</a></li>
                          <li id="menu-item-2232" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2232"><a title="BAIS FKM-UNSRI" href="https://bais.ub.ac.id/">BAIS FKM-UNSRI</a></li>
                          <li id="menu-item-2233" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2233"><a title="E Complaint" href="https://e-complaint.ub.ac.id/">E Complaint</a></li>
                          <li id="menu-item-2234" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2234"><a title="LPSE" href="http://lpse.ub.ac.id">LPSE</a></li>
                          <li id="menu-item-2235" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2235"><a title="Livestream" href="<?= base_url() ?>live-streaming/">Livestream</a></li>
                          <li id="menu-item-2236" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2236"><a title="Konseling" href="https://konseling.ub.ac.id/">Konseling</a></li>
                          <li id="menu-item-2237" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2237"><a title="Tracer Study" href="https://docs.google.com/forms/d/e/1FAIpQLScu-esQbpdvN77ePk9Ri4HY6at9jTLbSQNu4QhHiYTrNcwCpQ/viewform">Tracer Study</a></li>
                        </ul>
              </li> -->
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
                <li id="menu-item-202" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-202"><a href="http://lib.ugik-dev.com">Direktori FKM</a></li>
                <li id="menu-item-202" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-202"><a href="<?= base_url('login') ?>"><?php if(!empty($this->session->userdata()['username'])){ echo $this->session->userdata()['nama']; }else{ echo ' Login';} ?></a></li>

              </ul>
            </div>
          </div>
        </div>
      </section>
      <div class="container">
        <div class="navbar-header"> <a href="<?= site_url() ?>" class="custom-logo-link" rel="home"><img width="275" height="75" alt="PUBLIC HEALTH FACULTY" data-src="<?= base_url('assets/img/fkm_logo.png') ?>" class="custom-logo lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img width="275" height="75" src="<?= base_url('assets/img/fkm_logo.png') ?>" class="custom-logo" alt="Universitas Brawijaya" /></noscript></a></div>
        <div class="navbar-right toggle-group clearfix">
          <button class="btn btn-default search-toggle" type="button">
            <i class="fa fa-search"></i></button>

          <button type="button" class="navbar-toggle collapsed btn btn-default" data-toggle="collapse" data-target="#ub-nav" aria-expanded="false"> <i class="fa fa-reorder"></i> </button></div>
        <div class="collapse navbar-collapse navbar-ub-collapse" id="ub-nav">
          <div class="menu-primary-container">
            <ul id="menu-primary" class="nav navbar-nav ub-nav navbar-right">
              </li>
              <li id="menu-item-61" class="menu-about menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-61 dropdown"><a title="Tentang FKM-UNSRI" description="A tertiary institution in South Sumatra has existed since the early 1950s, which was sparked at a reception to celebrate Independence Day on 17 August 1952. Initiated by several community leaders, it was transformed into an agreement to form a South Sumatra Facultet Committee" href="<?= site_url() ?>/id/about/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">About FKM-UNSRI <i class="animated fa fa-angle-right"></i></a>
                <div class="menu-desc hidden-md-down">A tertiary institution in South Sumatra has existed since the early 1950s, which was sparked at a reception to celebrate Independence Day on 17 August 1952. Initiated by several community leaders, it was transformed into an agreement to form a "South Sumatra Facultet Committee".</div>
                <div class=" dropdown-menu">
                  <div class=" row block">
                    <div class=" col-lg-7 col-md-7 col-xs-12 pull-right sub-mobile">
                      <div class=" submenu-group">
                        <ul class=" ul-2" role="menu">
                          <li id="menu-item-705" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-705"><a title="History" href="<?= site_url() ?>about/history/">History FKM UNSRI</a></li>
                          <li id="menu-item-401" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-401"><a title="Meaning of Symbol" href="<?= site_url() ?>about/logo/">Meaning of Symbol</a></li>
                          <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a title="Vision and Mission" href="<?= site_url() ?>about/vision-and-mission/">Vision dan Mission</a></li>
                          <li id="menu-item-708" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-708"><a title="Faculty Senate" href="<?= site_url() ?>about/senate/">Faculty Senate</a></li>
                          <li id="menu-item-68" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68"><a title="Leadership Structure" href="<?= site_url() ?>about/structure/">Leadership Structure</a></li>
                          <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a title="Lecturers and Educators" href="<?= site_url() ?>about/lecturer/">Lecturers and Educators</a></li>
                          <li id="menu-item-62" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-62"><a title="Acderitation" href="<?= site_url() ?>about/accreditation/">Acderitation</a></li>
                          <li id="menu-item-63" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63"><a title="Achievements" href="<?= site_url() ?>about/achievements/">Achievements</a></li>
                          <li id="menu-item-2687" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2687"><a title="Education Personnel" href="<?= site_url() ?>about/education-personnel/">Education Personnel FKM UNSRI</a></li>
                        </ul>
              </li>
              <li id="menu-item-72" class="menu-academy menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-72 dropdown"><a title="Academic" description="deskripsi indonesia" href="<?= site_url() ?>id/academy/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Academic <i class="animated fa fa-angle-right"></i></a>
                <div class="menu-desc hidden-md-down">Academy Public Healty Faculty</div>
                <div class=" dropdown-menu">
                  <div class=" row block">
                    <div class=" col-lg-7 col-md-7 col-xs-12 pull-right sub-mobile">
                      <div class=" submenu-group">
                        <ul class=" ul-2" role="menu">
                          <li id="menu-item-705" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-705"><a title="Public Health Study Program (S1))" href="<?= site_url() ?>academy/program-1/">Public Health Study Program (S1)</a></li>
                          <li id="menu-item-401" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-401"><a title="Nutrition Study Program (S1)" href="<?= site_url() ?>academy/program-2/">Nutrition Study Program (S1)</a></li>
                          <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a title="Environmental Health Study Program (S1)" href="<?= site_url() ?>academy/program-3/">Environmental Health Study Program (S1)</a></li>
                          <li id="menu-item-708" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-708"><a title="Public Health Studies Program (S2)" href="<?= site_url() ?>academy/program-4/">Public Health Studies Program (S2)</a></li>
                          <li id="menu-item-68" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68"><a title="Academic Calendar" href="<?= site_url() ?>academy/calendar/">Academic Calendar </a></li>
                          <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a title="Research" href="<?= site_url() ?>research">Reserach</a></li>

                          <li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a title="Guide" href="<?= site_url() ?>academy/guide/">Guide</a></li>
                        </ul>
              </li>
              <li id="menu-item-81" class="menu-campus menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-81 dropdown"><a title="Services" description="Faculty of Public Health, Sriwijaya University Dr. Building A.I. Mutholib, MPH - Unsri Indralaya Campus, Ogan Ilir 30662 Jl. Palembang Prabumulih Km.32 Indralaya South Sumatra - Indonesia.." href="<?= base_url() ?>services/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Services <i class="animated fa fa-angle-right"></i></a>
                <div class="menu-desc hidden-md-down">Faculty of Public Health, Sriwijaya University <br> Dr. Building A.I. Mutholib, MPH - Unsri Indralaya Campus, Ogan Ilir 30662 <br> Jl. Palembang Prabumulih Km.32 Indralaya South Sumatra - Indonesia.</div>
                <div class=" dropdown-menu">
                  <div class=" row block">
                    <div class=" col-lg-7 col-md-7 col-xs-12 pull-right sub-mobile">
                      <div class=" submenu-group">
                        <ul class=" ul-2" role="menu">
                          <li id="menu-item-423" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-423"><a title="Contact US" href="<?= base_url() ?>services/contact/">Contact US</a></li>
                          <li id="menu-item-423" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-423"><a title="Library" href="<?= base_url() ?>services/library/">Library</a></li>

                          <li id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83">
                            <a title="System Academic Information" href="https://akademik.unsri.ac.id//">
                              System Academic Information
                            </a></li>
                          <li id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83">
                            <a title="Journal of Public Health Sciences" href="http://www.jikm.unsri.ac.id/index.php/jikm">
                              Journal of Public Health Sciences
                            </a></li>
                          <li id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83">
                            <a title="IKAFKM" href="http://iakmu.fkm.unsri.ac.id/">
                              IKAFKM
                            </a></li>
                          <li id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83">
                            <a title="Education Development and Quality Assurance Unit" href="<?= base_url() . 'services/up3m' ?>">
                              Education Development and Quality Assurance Unit
                            </a></li>
                          <li id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83">
                            <a title="UPPM" href="<?= base_url() . 'services/uppm' ?>">
                              UPPM
                            </a></li>
                          <li id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83">
                            <a title="Facilities" href="<?= base_url() . 'services/facilities' ?>">
                              Facilities
                            </a></li>
                          <li id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83">
                            <a title="Integrated Public Health Laboratory" href="<?= base_url() . 'services/lab-fkm' ?>">
                              Integrated Public Health Laboratory
                            </a></li>




                          <li id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83">
                            <a title="Multimedia Laboratory" href="<?= base_url() . 'services/lab-multimedia' ?>">
                              Multimedia Laboratory
                            </a></li>
                          <li id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83">
                            <a title="Health Research Ethics Commission (KEPK)" href="http://kajietik.fkm.unsri.ac.id/">
                              Health Research Ethics Commission (KEPK)
                            </a></li>
                          <li id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83">
                            <a title="SKPI (Certificate Companion Diploma)" href="http://skpi.fkm.unsri.ac.id/">
                              SKPI (Certificate Companion Diploma)
                            </a></li>
                        </ul>
              </li>
              <li id="menu-item-112" class="menu-research menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-112 dropdown"><a title="Colloquium" description="Colloquium" href="<?= base_url() ?>research/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Colloquium <i class="animated fa fa-angle-right"></i></a>
                <div class="menu-desc hidden-md-down">Colloquium</div>
                <div class=" dropdown-menu">
                  <div class=" row block">
                    <div class=" col-lg-7 col-md-7 col-xs-12 pull-right sub-mobile">
                      <div class=" submenu-group">
                        <ul class=" ul-2" role="menu">
                          <li id="menu-item-320" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-320"><a title="National Seminar" href="<?= base_url() ?>seminar/seminar-nasional/">National Colloquium</a></li>
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