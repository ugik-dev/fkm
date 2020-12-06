<?php
// google_translate("Ini bahasa indonesia menjadi..?",'en',"id","text")
// google_translate('Bored', 'en', 'in' , 'text');
?>
<body class="page-template-default page page-id-31 page-child parent-pageid-27 wp-custom-logo">
  <section style="height: 30px;" id="page-header" class="page-header parallax-window section-row hidden-sm hidden-xs" data-parallax="scroll" data-image-src="<?=base_url()?>assets/img/logo-unsri.png">
    <div class="container">
      <div class="page-header-title">
      <?php if ($_COOKIE['lang_set'] == 'in') { ?>
        <h1 class="entry-title"><a href="<?= base_url() ?>" title="<?=$contentData['berita_judul']?>"><?=$contentData['berita_judul']?></a></h1>
      <?php }else{ ?>
        <h1 class="entry-title"><a href="<?= base_url() ?>" title="<?=$contentData['berita_judul_en']?>"><?=$contentData['berita_judul_en']?></a></h1>  
        <?php }; ?>

        <?php if ($_COOKIE['lang_set'] == 'in') { ?>
            <div class="breadcrumb"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Fakultas Ilmu Kesehatan - Universitas Sriwijaya." href="<?= base_url() ?>" class="home"><span property="name">Fakultas Ilmu Kesehatan</span></a>
            <meta property="position" content="1"></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="<?= base_url() . '' ?>" href="<?= base_url() . '' ?>" class="post post-page"><span property="name"> Layanan</span></a>

     
            <?php }else{ ?>
     
                <div class="breadcrumb"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Public Healty Faculty - Sriwijaya University." href="<?= base_url() ?>" class="home"><span property="name">Public Healty Faculty </span></a>
            <meta property="position" content="1"></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="<?= base_url() . '' ?>" href="<?= base_url() . '' ?>" class="post post-page"><span property="name"> Services</span></a>
     
                <?php }; ?>
     

        </div>
      </div>
  </section>
  <section class="page-row article-row bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12">

          <div id="post-31" class="article-frame post-31 page type-page status-publish hentry">
          <?php if ($_COOKIE['lang_set'] == 'in') { ?>
            <h1 class="entry-title  hidden-lg hidden-md"><a href="" title="<?=$contentData['berita_judul']?>"><?=$contentData['berita_judul']?></a></h1>
            <div class="entry-content" id='news-list'>
            <?=$contentData['berita_isi']?>
     
            <?php }else{ ?>
                <h1 class="entry-title  hidden-lg hidden-md"><a href="" title="<?=$contentData['berita_judul_en']?>"><?=$contentData['berita_judul_en']?></a></h1>
            <div class="entry-content" id='news-list'>
            <?=$contentData['berita_isi_en']?>
                <?php }; ?>
            </div>
            <div class="col-md-7">
              <div class="text-center">
                <ul class="pagination " style="visibility: visible; ">
                  <div class="pagging text-center">
                    <nav>
                      <ul class="pagination justify-content-center" id='pagination'>
                      </ul>
                    </nav>
                  </div>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <?php $this->load->view('public/fragment/slidebarServices') ?>
      </div>
    </div>
  </section>
  <style>
    .page-header {
      height: 100px !important;
      padding-top: 15.76px !important;
    }
  </style>
</body>

<script type='text/javascript'>
  $(document).ready(function() {
  
  });
</script>