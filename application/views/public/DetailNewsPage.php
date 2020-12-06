<body class="page-template-default page page-id-31 page-child parent-pageid-27 wp-custom-logo">
  <section style="height: 30px;" id="page-header" class="page-header parallax-window section-row hidden-sm hidden-xs" data-parallax="scroll" data-image-src="<?= base_url('assets/img/fkm_logo.png') ?>">
    <div class="container">
      <div class="page-header-title">
        <?php if ($_COOKIE['lang_set'] == 'in') { ?>
          <h1 class="entry-title"><a href="" title="<?= $contentData['berita_judul'] ?>"><?= $contentData['berita_judul'] ?></a></h1>
          <div class="breadcrumb"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Fakultas Ilmu Kesehatan - Universitas Sriwijaya." href="<?= base_url() ?>" class="home"><span property="name">Fakultas Ilmu Kesehatan</span></a>
              <meta property="position" content="1"></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="<?= base_url() . 'post/' . $contentData['slug'] ?>" href="<?= base_url() . 'post/' . $contentData['slug'] ?>" class="post post-page"><span property="name"> <?= $contentData['nama_jenis_berita'] ?> </span></a>
              <?php if ($contentData['topik_utama'] == '2') {
                echo '  <meta property="position" content="1"></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="' . base_url() . 'post/' . $contentData['slug'] . '" href="' . base_url() . 'hot_news" class="post post-page"><span property="name"> Topik Utama </span></a>';
              } ?>

            <?php } else { ?>
              <h1 class="entry-title"><a href="" title="<?= $contentData['berita_judul_en'] ?>"><?= $contentData['berita_judul_en'] ?></a></h1>
              <div class="breadcrumb"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Public Healty Faculty - Sriwijaya University." href="<?= base_url() ?>" class="home"><span property="name">Public Healty Faculty</span></a>
                  <meta property="position" content="1"></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="<?= base_url() . 'post/' . $contentData['slug'] ?>" href="<?= base_url() . 'post/' . $contentData['slug'] ?>" class="post post-page"><span property="name"> <?= $contentData['nama_jenis_berita_en'] ?> </span></a>
                  <?php if ($contentData['topik_utama'] == '2') {
                    echo '  <meta property="position" content="1"></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="' . base_url() . 'post/' . $contentData['slug'] . '" href="' . base_url() . 'hot_news" class="post post-page"><span property="name"> Main Topic </span></a>';
                  } ?>
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
              <h1 class="entry-title  hidden-lg hidden-md"><a href="" title="<?= $contentData['berita_judul'] ?>"><?= $contentData['berita_judul'] ?></a></h1>
              <div class="entry-content">
                <img alt="" src="<?= base_url('uploads/berita_image/') . $contentData['berita_image'] ?>" style="height:auto; width:100% ; padding: 20px 20px 20px 20px">
      
                <?= date('d F Y, H:i', strtotime($contentData['berita_tanggal'])) ?><br>
                
                <?= $contentData['berita_isi'] ?>
              <?php } else { ?>
                <h1 class="entry-title  hidden-lg hidden-md"><a href="" title="<?= $contentData['berita_judul_en'] ?>"><?= $contentData['berita_judul_en'] ?></a></h1>
                <div class="entry-content">
                  <img alt="" src="<?= base_url('uploads/berita_image/') . $contentData['berita_image'] ?>" style="height:auto; width:100%; padding: 20px 20px 20px 20px" >
                  <?= date('d F Y, H:i', strtotime($contentData['berita_tanggal'])) ?><br>
                  <?= $contentData['berita_isi_en'] ?>

                <?php }; ?>
                <p>&nbsp;</p>
                <!-- <p><strong>Kontak</strong><br /> Biro Akademik dan Kerjasama (BAK)<br /> Gd. Rektorat Lt.2 Universitas Brawijaya<br /> Jalan Veteran Malang 65145<br /> Telepon : 0341-551611 dan 575777 ext. 117 dan 118 atau Langsung 0341-575754<br /> Fax : 0341-565420 dan 575813<br /> Email : baak[at]ub.ac.id<br /> Website : <a href="http://bak.ub.ac.id/">http://bak.ub.ac.id</a></p> -->
                <div style="clear: both"></div>
                </div>
              </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="sidebar sidebar-page">
              <div class='panel panel-submenu'>
                <div class='panel-header'>
                  <?php if ($_COOKIE['lang_set'] == 'in') { ?>
                    <h3 class='panel-title '><a><i class='fa fa-angle-left'></i> <?= $contentData['nama_jenis_berita'] ?></a></h3>
                  <?php } else { ?>
                    <h3 class='panel-title '><a><i class='fa fa-angle-left'></i> <?= $contentData['nama_jenis_berita_en'] ?></a></h3>
                  <?php }; ?>

                </div>
                <div class="panel-body pt-0">
                  <ul id="sidebar-nav" class="list-group list-sibling">

                  </ul>
                </div>
              </div>
            </div>
          </div>
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

    var sidebar = $('#sidebar-nav');
    // var lainnya = $('#berita-lainnya');
    // var kegiatan = $('#kegiatan');
    // var pengumuman = $('#pengumuman');
    // console.log('asd')

    getAllNews();

    function getAllNews() {
      return $.ajax({
        url: `<?php echo site_url('NewsController/getAll/') ?>`,
        'type': 'GET',
        data: {
          id_jenis_berita: '<?= $contentData['id_jenis_berita'] ?>'
        },
        success: function(data) {
          // swal.close();
          var json = JSON.parse(data);
          if (json['error']) {
            return;
          }
          data = json['data'];
          renderMenuRight(data);
        },
        error: function(e) {}
      });
    }


    function renderMenuRight(data) {
      if (data == null || typeof data != "object") {
        console.log("Product::UNKNOWN DATA");
        return;
      }
      sidebar.empty();
      // console.log(data);
      Object.values(data).forEach((news) => {

        <?php if ($_COOKIE['lang_set'] == 'in') { ?>
          sidebar.append(`
                  <li class="page_item page-item-41"><a href="<?= base_url() ?>post/${news['slug']}">${news['berita_judul']}</a></li>
               
                     
                  `);
        <?php } else { ?>
          sidebar.append(`
                  <li class="page_item page-item-41"><a href="<?= base_url() ?>post/${news['slug']}">${news['berita_judul_en']}</a></li>
               
                     
                  `);
        <?php }; ?>


      });
    }


  });
</script>
<script type='text/javascript'>
  /*<![CDATA[*/
  var metaslider_481 = function($) {
    $('#metaslider_481').addClass('flexslider');
    $('#metaslider_481').flexslider({
      slideshowSpeed: 3000,
      animation: "slide",
      controlNav: true,
      directionNav: true,
      pauseOnHover: true,
      direction: "horizontal",
      reverse: false,
      animationSpeed: 600,
      prevText: "&lt;",
      nextText: "&gt;",
      fadeFirstSlide: false,
      easing: "linear",
      slideshow: true
    });
    $(document).trigger('metaslider/initialized', '#metaslider_481');
  };
  var timer_metaslider_481 = function() {
    var slider = !window.jQuery ? window.setTimeout(timer_metaslider_481, 100) : !jQuery.isReady ? window.setTimeout(timer_metaslider_481, 1) : metaslider_481(window.jQuery);
  };
  timer_metaslider_481(); /*]]>*/
</script>
<script>
  $(document).ready(function() {

    var id_berita = `<?= $contentData['id_berita'] ?>`;

    var info = {
      'self': $('#info_container'),
      'nama_news': $('#info_container').find('#nama_news'),
      'cover_news': $('#info_container').find('#cover_news'),
      'berita_isi': $('#info_container').find('#berita_isi'),
      'berita_tanggal': $('#info_container').find('#berita_tanggal'),
    }
    console.log(info);
    $('#navbar-item').html(`
			<li><a class="nav-link page-scroll" href="<?= site_url('news') ?>">News</a></li>
		
	`)
    initNavbar(0);

    var dataNews = {}

    $.when(getNews()).then((e) => {
      swal.close();
    }).fail((e) => {
      console.log(e)
    });

    function getNews() {
      return $.ajax({
        url: "<?php echo site_url('NewsController/get') ?>",
        data: {
          'id_berita': id_berita
        },
        type: 'GET',
        success: function(data) {
          var json = JSON.parse(data);
          if (json['error']) {
            return;
          }
          dataNews = json['data'];
          console.log(dataNews);
          renderNews();
        },
        error: function(e) {}
      });
    }

    function renderNews() {
      info.nama_news.html(dataNews['berita_judul']);
      // info.berita_judul.html(`<a href="<?= site_url('PerusahaanController/detail') ?>?id_perusahaan=${dataNews['id_perusahaan']}">${dataNews['berita_judul']}</a>`);
      info.cover_news.html(`
    <img width="100%" src="<?php echo base_url() . 'assets/img/news/'; ?>${dataNews['berita_image']}">
    <div style="background-image:url('<?= base_url('assets/img/news/') ?>${dataNews['berita_image']}')"></div>
            
             
    `);
      info.berita_isi.html(dataNews['berita_isi'] ? dataNews['berita_isi'] : ' ');
      info.berita_tanggal.html(" Post at " + dataNews['berita_tanggal']);
    }
  });
</script>

</body>

</html>