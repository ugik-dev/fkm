<body class="page-template-default page page-id-31 page-child parent-pageid-27 wp-custom-logo">
    <section style="height: 30px;" id="page-header" class="page-header parallax-window section-row hidden-sm hidden-xs" data-parallax="scroll" data-image-src="https://ub.ac.id/wp-content/uploads/2017/09/bg-default.jpg">
        <div class="container">
            <div class="page-header-title">
                <?php if ($_COOKIE['lang_set'] == 'in') { ?>
                    <h1 class="entry-title"><a href="<?= base_url() ?>" title="<?= $contentData['berita_judul'] ?>"><?= $contentData['berita_judul'] ?></a></h1>
                <?php } else { ?>
                    <h1 class="entry-title"><a href="<?= base_url() ?>" title="<?= $contentData['berita_judul_en'] ?>"><?= $contentData['berita_judul_en'] ?></a></h1>
                <?php }; ?>

                <?php if ($_COOKIE['lang_set'] == 'in') { ?>
                    <div class="breadcrumb"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Fakultas Ilmu Kesehatan - Universitas Sriwijaya." href="<?= base_url() ?>" class="home"><span property="name">Fakultas Ilmu Kesehatan</span></a>
                            <meta property="position" content="1"></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="<?= base_url() . '' ?>" href="<?= base_url() . '' ?>" class="post post-page"><span property="name"> Tentang </span></a>


                        <?php } else { ?>

                            <div class="breadcrumb"> <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Public Healty Faculty - Sriwijaya University." href="<?= base_url() ?>" class="home"><span property="name">Public Healty Faculty </span></a>
                                    <meta property="position" content="1"></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="<?= base_url() . '' ?>" href="<?= base_url() . '' ?>" class="post post-page"><span property="name"> About </span></a>

                                <?php }; ?>

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
                                <!-- <img alt="" src="<?= base_url('assets/img/logo-unsri.png') ?>" style="height:333px; width:333px"> -->
                                <!-- <br> <strong>Senat Fakultas</strong></p> -->
                                <p style="margin-left:.25in;">
                                    Senat fakultas adalah badan normatif dan perwakilan tertinggi yang memiliki wewenang untuk menjabarkan kebijakan dan peraturan universitas/institusidi FKM Fakultas Kesehatan Masyarakat yang anggotanya terdiri dari guru besar, pimpinan fakultas, ketua Jurusan/Bagian dan wakil dosen secara proporsional.</p>
                                <p style="margin-left:.25in;">
                                    Senat Fakultas diketuai oleh Dekan yang dibantu oleh seorang sekretaris yang dipilih oleh dan dari anggota untuk masa jabatan 4 (empat) tahun.</p>
                                <p>
                                    Senat Fakultas mempunyai tugas pokok sebagai berikut :</p>
                                <ol>
                                    <li>
                                        Menjabarkan kebijakan dan peraturan Unsri untuk Fakultas Kesehatan Masyarakat.</li>
                                    <li>
                                        Merumuskan kebijakan akademik fakultas</li>
                                    <li>
                                        Merumuskan kebijakan penilaian prestasi akademik dan kecakapan serta kepribadian dosen.</li>
                                    <li>
                                        Merumuskan norma dan tolok ukur pelaksanaan penyelenggaraan fakultas.</li>
                                    <li>
                                        Menilai pertanggung jawaban pimpinan fakultas atas kebijakan akademik yang ditetapkan.</li>
                                    <li>
                                        Memberikan pertimbangan kepada pimpinan Unsri mengenai calon yang diusulkan untuk diangkat menjadi pimpinan fakultas.</li>
                                </ol>
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

        initNavbar(0);




    });
</script>

</body>

</html>