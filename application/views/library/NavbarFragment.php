<header class="main-header sticky-header-elements-headeronly mainmenu-position-menu_in_header">
  <div class="container">
    <div class="row">
      <div class="col-md-12" style="height: 100px;">
        <div class="header-left">
          <a class="logo-link" href="<?= base_url('library') ?>">
            <img style="height: 90px; width: auto" src="<?= base_url('assets/') ?>img/fkm_logo.png" alt="Barrel" class="regular-logo"><img src="<?= base_url('assets/') ?>img/fkm_logo.png" alt="Barrel" class="light-logo">
          </a>
          <div class="mobile-main-menu-toggle" data-toggle="collapse" data-target=".collapse"><i class="fa fa-bars"></i></div>
        </div>

        <div class="header-center">
          <div id="navbar" class="navbar navbar-default clearfix mgt-mega-menu menu-right menu-style-border-bottom">
            <div class="navbar-inner">
              <div class="navbar-collapse collapse">
                <ul id="menu-main-menu-2" class="nav">
                  <li class="menu-item menu-item-home menu-item page_item">
                    <a href="<?= base_url('library') ?>"><span>Homepage</span></a>
                  </li>
                  <li class="menu-item menu-item-home menu-item page_item">
                    <a href="<?= base_url() ?>"><span>FKM-UNSRI</span></a>
                  </li>
                  <li class="menu-item menu-item-home menu-item page_item">
                    <a href="<?= base_url('journal') ?>"><span>Jurnal</span></a>
                  </li>
                  <li class="menu-item menu-item-home menu-item page_item">
                    <a href="<?= base_url('skripsi') ?>"><span>Skripsi</span></a>
                  </li>
                  <li class="menu-item menu-item-home menu-item page_item">
                    <a href="<?= base_url('login') ?>"><?php if (!empty($this->session->userdata()['username'])) {
                                                          echo $this->session->userdata()['nama'];
                                                        } else {
                                                          echo ' Login';
                                                        } ?>
                    </a>
                  </li>


                  <li class="menu-item">
                    <!-- <div > -->
                    <a id="trigger-search" class="search-toggle-btn"><span>Cari </span> <i class="fa fa-search"></i></a>
                    <!-- </div> -->
                    <!-- <a href="blog.html"><span>Blog</span></a> -->
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="header-right">
          <ul class="header-nav"></ul>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="content-block stick-to-footer">
  <div class="container-bg with-bg container-fluid" data-style="background-image: url(<?= base_url('assets/') ?>img/slideshow_1.jpg); height: 200%;">
    <div class="container-bg-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-item-title">
              <h1 class="text-center texttransform-none"></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="breadcrumbs-container-wrapper">
               <div class="container">
                   <div class="row">
                       <div class="col-md-12">
                           <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                               <span property="itemListElement" typeof="ListItem">
                                   <a property="item" typeof="WebPage" title="Go to Barrel." href="http://wp.magnium-themes.com/barrel/barrel-1" class="home"><span property="name">Barrel</span></a>
                                   <meta property="position" content="1" />
                               </span>
                               &gt; <span property="itemListElement" typeof="ListItem"><span property="name">Carousel sliders</span>
                                   <meta property="position" content="2" /></span>
                           </div>
                       </div>
                   </div>
               </div>
           </div> -->
  </div>