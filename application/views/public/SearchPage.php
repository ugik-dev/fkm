<body class="page-template-default page page-id-31 page-child parent-pageid-27 wp-custom-logo">
    <section style="height: 30px;" id="page-header" class="page-header parallax-window section-row hidden-sm hidden-xs" data-parallax="scroll" data-image-src="https://ub.ac.id/wp-content/uploads/2017/09/bg-default.jpg">
        <div class="container">
            <div class="page-header-title">
                <?php if ($_COOKIE['lang_set'] == 'in') { ?>
                    <h1 class="entry-title"><a href="<?= base_url() ?>" title="Pencarian">Pencarian</a></h1>
                <?php } else { ?>
                    <h1 class="entry-title"><a href="<?= base_url() ?>" title="Search">Search</a></h1>
                <?php }; ?>

                <?php if ($_COOKIE['lang_set'] == 'in') { ?>
                    <div class="breadcrumb"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Fakultas Ilmu Kesehatan - Universitas Sriwijaya." href="<?= base_url() ?>" class="home"><span property="name">Fakultas Ilmu Kesehatan</span></a>
                            <meta property="position" content="1"></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="<?= base_url() . '' ?>" href="<?= base_url() . '' ?>" class="post post-page"><span property="name"> Pencarian </span></a>
                        <?php } else { ?>
                            <div class="breadcrumb"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Public Healty Faculty - Sriwijaya University." href="<?= base_url() ?>" class="home"><span property="name">Public Healty Faculty</span></a>
                                    <meta property="position" content="1"></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="<?= base_url() . '/' ?>" href="<?= base_url() . '/' ?>" class="post post-page"><span property="name"> Search </span></a>
                                <?php }; ?>
                            </div>
                    </div>
    </section>
    <section class="page-row article-row bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div id="post-31" class="article-frame post-31 page type-page status-publish hentry">
                        <?php if ($_COOKIE['lang_set'] == 'in') { ?>
                            <h1 class="entry-title  hidden-lg hidden-md"><a href="" title="Tentang">Tentang</a></h1>
                        <?php } else { ?>
                            <h1 class="entry-title  hidden-lg hidden-md"><a href="" title="About">About</a></h1>
                        <?php }; ?>


                        <div class="entry-content" id='news-list'>
                            <!-- Isi konten history -->

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
        var clue = '<?= $contentData['clue'] ?>';
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

        getAllPage();

        function getAllPage() {
            return $.ajax({
                url: `<?php echo site_url('NewsController/getAllPage/') ?>`,
                'type': 'GET',
                data: {
                    clue: clue,
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
            jumlah = Math.ceil(data['page'] / 6);
            html_tmp = '';
            if (page > 1) {

                html_tmp = `<li class="page-item"><span class="page-link"><a href="<?= base_url() ?>search?val=${clue}&page=${page-1}">Prev</a></span></li>
        `;
            }

            for (i = 1; i <= jumlah; i++) {
                if (page == i) {
                    html_tmp += `   <li class="page-item active"><span class="page-link">${i}<span class="sr-only">(current)</span></span></li>
                     `
                } else {
                    html_tmp += ` <li class="page-item"><span class="page-link"><a href="<?= base_url() ?>search?val=${clue}&page=${i}">${i}</a></span></li>
                      `;
                }
            }

            if (page < jumlah) {

                html_tmp += `<li class="page-item"><span class="page-link"><a href="<?= base_url() ?>search?val=${clue}&page=${parseInt(page)+1}">Next</a></span></li>
`;
            }



            pagination.html(html_tmp);

        }


        getAllNews();

        function getAllNews() {
            return $.ajax({
                url: `<?php echo site_url('PublicController/searchE/') ?>`,
                'type': 'GET',
                data: {
                    val: clue,
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

                <?php if ($_COOKIE['lang_set'] == 'in') { ?>
                    news_list.append(`

                    <div class="col-lg-6 "> 
                    <div class="row">
                    <div class="col-lg-3  headline-thumbnail sub-thumbnail"> <a class="headline-link" style=" margin-left: 10px;  width: 100%; height: 160px; margin: 2px 2px 2px 2px"> 
                    <img style="object-fit:cover" data-src="<?= base_url('uploads/berita_image/') ?>${news['berita_image']}" class="lazyload" />
                            </a></div>
                    <div class="col-lg-9  headline-text">
                        <h2 class=" headline-title  trim-text serif " title='${news['berita_judul']}'> <a class="headline-link " href="<?= base_url('post/'); ?>${news['slug']}" title="Read ${news['berita_judul']}"> ${news['berita_judul']} </a></h2>
                        <h4 class=" headline  trim-text serif " >${news['berita_tanggal']} </h4>
                        </div>
                        </div>
                    </div>`);
                <?php } else { ?>

                    news_list.append(`

                    <div class="col-lg-6 "> 
                    <div class="row">
                    <div class="col-lg-3  headline-thumbnail sub-thumbnail"> <a class="headline-link" style=" margin-left: 10px;  width: 100%; height: 160px; margin: 2px 2px 2px 2px"> 
                    <img style="object-fit:cover" data-src="<?= base_url('uploads/berita_image/') ?>${news['berita_image']}" class="lazyload" />
                            </a></div>
                    <div class="col-lg-9  headline-text">
                        <h2 class=" headline-title  trim-text serif " title='${news['berita_judul_en']}'> <a class="headline-link " href="<?= base_url('post/'); ?>${news['slug']}" title="Read ${news['berita_judul_en']}"> ${news['berita_judul_en']} </a></h2>
                        <h4 class=" headline  trim-text serif " >${news['berita_tanggal']} </h4>
                        </div>
                        </div>
                    </div>`);
                <?php }; ?>


                i++;
            });


        }

    });
</script>