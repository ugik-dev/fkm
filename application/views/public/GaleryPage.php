<body class="page-template-default page page-id-31 page-child parent-pageid-27 wp-custom-logo">
  <section style="height: 30px;" id="page-header" class="page-header parallax-window section-row hidden-sm hidden-xs" data-parallax="scroll" data-image-src="https://ub.ac.id/wp-content/uploads/2017/09/bg-default.jpg">
    <div class="container">
      <div class="page-header-title">
        <h1 class="entry-title"><a href="<?= base_url() ?>" title="Galery">Galery</a></h1>
        
        <?php if ($_COOKIE['lang_set'] == 'in') { ?>
                <div class="breadcrumb"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Fakultas Ilmu Kesehatan - Universitas Sriwijaya." href="<?= base_url() ?>" class="home"><span property="name">Fakultas Ilmu Kesehatan</span></a>
            <?php } else { ?>
              <div class="breadcrumb"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Public Healty Faculty - Universitas Sriwijaya." href="<?= base_url() ?>" class="home"><span property="name">Public Healty Faculty</span></a>
       <?php }; ?>
            <!-- <meta property="position" content="1"></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="<?= base_url() . 'announcement/' ?>" href="<?= base_url() . 'announcement/' ?>" class="post post-page"><span property="name"> Pengumuman </span></a> -->

        </div>
      </div>
  </section>
  <section class="page-row article-row bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">

          <div id="post-31" class="article-frame post-31 page type-page status-publish hentry">
            <h1 class="entry-title  hidden-lg hidden-md"><a href="" title="Galery">Galery</a></h1>
            <div class="entry-content" id='news-list'>
              <!-- Isi konten history -->

            </div>
            <div class="col-md-12">
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
      </div>
    </div>
  </section>


  
<style>
    /* body {font-family: Arial, Helvetica, sans-serif;} */

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        /* z-index: 1; Sit on top */
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0);
        /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 100%;
    }

    .modal-dialog {
        background-color: none;
        margin: auto;
        padding: 20px;
        border: 0px solid #888;
        width: 70%;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>

<!-- The Modal -->
<div class="modal" id="photo2_modal" tabindex="-1" style="width: 100%;">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
                <!-- <h5 class="modal-title">Modal title</h5> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id='papan_pengumuman' class="modal-body">
                <p></p>
            </div>

        </div>
    </div>
</div>


  <!-- <div class="modal inmodal" id="photo2_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content animated fadeIn">
        <div class="modal-header">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            </ol>
            <div class="carousel-inner">
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <style>
    .page-header {
      height: 100px !important;
      padding-top: 15.76px !important;
    }
  </style>
</body>

<script type='text/javascript'>
  $(document).ready(function() {
    var page = '<?php if (empty($this->input->get()['page'])) {
                  echo '1';
                } else {
                  echo $this->input->get()['page'];
                } ?>';
    var news_list = $('#news-list');
    // var lainnya = $('#berita-lainnya');
    // var kegiatan = $('#kegiatan');
    var pagination = $('#pagination');
    // console.log('asd')

    var Photo2Modal = {
      'self': $('#photo2_modal'),
      'images': $('#photo2_modal').find('#papan_pengumuman '),
    };

    // Photo2Modal.self.modal('show');


    getAllPage();

    function getAllPage() {
      return $.ajax({
        url: `<?php echo site_url('GaleryController/getAllPage/') ?>`,
        'type': 'GET',
        data: {
          galery: true,
          // page: page
        },
        success: function(data) {
          // swal.close();
          var json = JSON.parse(data);
          if (json['error']) {
            return;
          }
          data = json['data'];
          renderPaggination(data);
        },
        error: function(e) {}
      });
    }


    function renderPaggination(data) {
      if (data == null || typeof data != "object") {
        console.log("Product::UNKNOWN DATA");
        return;
      }
      pagination.empty();
      jumlah = Math.ceil(data['page'] / 5);
      html_tmp = '';
      if (page > 1) {

        html_tmp = `<li class="page-item"><span class="page-link"><a href="<?= base_url() ?>announcement?page=${page-1}">Prev</a></span></li>
        `;
      }

      for (i = 1; i <= jumlah; i++) {
        if (page == i) {
          html_tmp += `   <li class="page-item active"><span class="page-link">${i}<span class="sr-only">(current)</span></span></li>
                     `
        } else {
          html_tmp += ` <li class="page-item"><span class="page-link"><a href="<?= base_url() ?>announcement?page=${i}">${i}</a></span></li>
                      `;
        }
      }

      if (page < jumlah) {

        html_tmp += `<li class="page-item"><span class="page-link"><a href="<?= base_url() ?>announcement?page=${parseInt(page)+1}">Next</a></span></li>
`;
      }



      pagination.html(html_tmp);

    }


    getAllNews();

    function getAllNews() {
      return $.ajax({
        url: `<?php echo site_url('GaleryController/getAllGalery/') ?>`,
        'type': 'GET',
        data: {
          landing_page: true,
          page: page
        },
        success: function(data) {
          // swal.close();
          var json = JSON.parse(data);
          if (json['error']) {
            return;
          }
          dataNews = json['data'];
          renderNews(dataNews);
        },
        error: function(e) {}
      });
    }


    function renderNews(data) {
      if (data == null || typeof data != "object") {
        console.log("Product::UNKNOWN DATA");
        return;
      }
      var i = 0;
      news_list.empty();
      Object.values(data).forEach((news) => {

        news_list.append(`

                       <div class="col-md-4 col-sm-4 col-xs-4 "> 
                        <div class="show_photo col-md-12 col-sm-12 col-xs-12 headline-thumbnail sub-thumbnail" data-id='${news['id_galery']}' > <a class="headline-link" style=" margin-left: 10px;  width: 100%; height: 160px; margin: 2px 2px 2px 2px"> 
                        <img style="object-fit:cover" data-src="<?= base_url('uploads/media_galery/') ?>${news['media_galery']}" class="lazyload" />
                                  </a>
                        
                            </div>
                    </div>`);


        i++;
      });
    }

    news_list.on('click', '.show_photo', function() {
      var id = $(this).data('id');
      Photo2Modal.self.modal('show');
      console.log(dataNews[id]['media_galery'])
      tmp = `<?= base_url('uploads/media_galery/') ?>` + dataNews[id]['media_galery'];
      img2HTML = `
              <div class="">
                <img src="${tmp}" width="100%" class="" alt="...">
                <hr>
                <p>${dataNews[id]['deskripsi']}</p>
              </div>
          `;

      Photo2Modal.images.html(img2HTML);


    })
    // }
    // document.getElementById("show_photo").onclick = function() {
    //  console.log('')
    //   // showPhotoModal()
    //   };

  });
</script>