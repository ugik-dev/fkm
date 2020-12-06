
<body class="page-template-default page page-id-31 page-child parent-pageid-27 wp-custom-logo">
    <section style="height: 30px;" id="page-header" class="page-header parallax-window section-row hidden-sm hidden-xs" data-parallax="scroll" data-image-src="https://ub.ac.id/wp-content/uploads/2017/09/bg-default.jpg">
        <div class="container">
            <div class="page-header-title">
                <h1 class="entry-title"><a href="<?= base_url() ?>" title="History">Dosen dan Tenaga Pendidik</a></h1>
                <div class="breadcrumb"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Fakultas Ilmu Kesehatan - Universitas Sriwijaya." href="<?= base_url() ?>" class="home"><span property="name">Fakultas Ilmu Kesehatan</span></a>
                        <meta property="position" content="1"></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="<?= base_url() . 'about/' ?>" href="<?= base_url() . 'about/' ?>" class="post post-page"><span property="name"> Tentang </span></a>

                </div>
            </div>
    </section>
    <section class="page-row article-row bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div id="post-31" class="article-frame post-31 page type-page status-publish hentry">
                        <h1 class="entry-title  hidden-lg hidden-md"><a href="" title="Tentang">Tentang</a></h1>
                        <div class="entry-content">
                            <!-- Isi konten history -->
                            <p style="text-align: center;">
                                <!-- <img alt="" src="<?= base_url('assets/img/logo-unsri.png') ?>" style="height:auto; width:233px"> -->

                                <table id="FDataTable" class="table table-bordered table-hover" style="padding:0px">
                                    <thead>
                                        <tr>
                                            <!-- <th style="width: 7%; text-align:center!important">No</th> -->
                                            <th style="width: 24%; text-align:center!important">Nama</th>
                                            <th style="width: 24%; text-align:center!important">Jabatan</th>
                                            <th style="width: 16%; text-align:center!important">Photo</th>

                                        </tr>
                                    </thead>
                                    <tbody id="FDataTable"  >
                                       
                                    </tbody>
                                </table>
                                <!-- end Konten -->
                                <p>&nbsp;</p>
                                <!-- <p><strong>Kontak</strong><br /> Biro Akademik dan Kerjasama (BAK)<br /> Gd. Rektorat Lt.2 Universitas Brawijaya<br /> Jalan Veteran Malang 65145<br /> Telepon : 0341-551611 dan 575777 ext. 117 dan 118 atau Langsung 0341-575754<br /> Fax : 0341-565420 dan 575813<br /> Email : baak[at]ub.ac.id<br /> Website : <a href="http://bak.ub.ac.id/">http://bak.ub.ac.id</a></p> -->
                                <div style="clear: both"></div>
                        </div>
                    </div>
                </div>
                <?php $this->load->view('public/fragment/slidebarAbout') ?>
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

</script>
<script type='text/javascript'>

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
    // initNavbar(0);


    $(document).ready(function() {
        var FDataTable = $('#FDataTable')
        getAllStrukturPimpinan();

        function getAllStrukturPimpinan() {

            return $.ajax({
                url: `<?php echo site_url('PublicController/getAllDosenDanTenagaPendidik/') ?>`,
                'type': 'POST',
                data: {},
                success: function(data) {
                    // swal.close();
                    var json = JSON.parse(data);
                    if (json['error']) {
                        return;
                    }
                    dataPimpinan = json['data'];
                    renderPimpinan(dataPimpinan);
                },
                error: function(e) {}
            });
        }

        function renderPimpinan(data) {
            if (data == null || typeof data != "object") {
                console.log("Pimpinan::UNKNOWN DATA");
                return;
            }
            var i = 0;

            var renderData = [];
            Object.values(data).forEach((d) => {
                img = d['photo'] ? `<img src="<?= base_url('uploads/photo/') ?>${d['photo']}" width="190px" >` : '';

                tmp = `<tr>
                                            <!-- <th style="width: 7%; text-align:center!important">No</th> -->
                                            <td style="text-align:center!important">${d['nama']}</td>
                                            <td style="text-align:center!important">${d['jabatan']}</td>
                                            <td style=" text-align:center!important">${img}</td>

                                        </tr>` 
                                        FDataTable.append(tmp);
            });
            // FDataTable.clear().rows.add(renderData).draw('full-hold');
        }
    });




    // });
</script>

</body>

</html>