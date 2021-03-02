<?php if ($_COOKIE['lang_set'] == 'in') { ?>
    <section class="full-screen home-full">
        <section class="home-video local-video">

            <div id="custom_html-2" class="widget_text ">
                <?php if (!empty($head[0])) {
                    if ($head[0]['tipe'] == 'img') {
                        echo  '    <div id="metaslider_widget-2" class="home-modal">
                        <div id="metaslider_container_481">
                        <div id="metaslider_481" class="flexslider">
                        <div class="flex-viewport" style="overflow: hidden; position: relative;">
                        <ul aria-live="polite" class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(-960px, 0px, 0px);">
                        
                        
                        
                        ';

                        foreach ($head as $value) {
                            $k = ' <li style="display: block; width: 320px; margin-right: 0px; float: left;" class="slide-2848 ms-image" data-thumb-alt="" aria-hidden="true">
                                   <img height="900" width="100%" alt="" title="mobile-slider-01" data-src="' . base_url('uploads/header_dir/') . $value['header_dir'] . '" class="slider-481 slide-2848 ls-is-cached lazyloaded" src="' . base_url('uploads/header_dir/') . $value['header_dir'] . '" draggable="false">
                               
                                        </li>';
                            echo $k;
                        }

                        echo '               </ul>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }

                    if ($head[0]['tipe'] == 'vid') {
                        echo ' <video autoplay loop muted playsinline controls class="videogif" style="width: 100%">
                    <source src="' . base_url('uploads/header_dir/') . $head[0]['header_dir']  . '" type="video/mp4" />
                    <p>Your browser does not support the video element.</p>
                </video>';
                    }
                }; ?>
            </div>
        </section>

        <section class="home-jump">
            <div class="container" style="display:none">
            </div>
            <div class="container">
                <div class="menu-ub-jump-container">
                    <ul id="menu-ub-jump" class="menu">
                        <li id="menu-item-1243" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1243"><a href="#panel-spotlight">Headline</a></li>
                        <li id="menu-item-1244" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1244"><a href="#panel-news">Berita</a></li>
                        <li id="menu-item-1245" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1245"><a href="#panel-event">Kegiatan</a></li>
                        <li id="menu-item-1246" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1246"><a href="#panel-announcement">Pengumuman</a></li>
                        <!-- <li id="menu-item-1247" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1247"><a href="#section-ub-fact">Fakta FKM-UNSRI</a></li> -->
                        <li id="menu-item-1546" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1546"><a href="<?= base_url() ?>about/achievements/">Prestasi</a></li>
                        <li id="menu-item-1244" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1244"><a href="<?= base_url() ?>galery">Galeri</a></li>
                        <li id="menu-item-1342" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1342"><a href="https://www.youtube.com/channel/UC2FccwVoAV3jH-WFPafov_g"><i class="fa fa-youtube-play"></i> Livestream</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </section>
    <div class="static-modal" style="z-index:990;display:none">
        <div class="container">
            <div class="row" style="z-index:990">
                <div class="col-12 col-md-2">
                    <div class="row">
                        <div class="col-md-10 col-sm-6 col-xs-6"> <a title="Informasi Daftar Ulang Penerimaan Jalur SNMPTN 2020" style="margin-bottom:15px;display:block" href="https://selma.unsri.ac.id/pengumuman-tata-cara-registrasi-daftar-ulang-mahasiswa-snmptn-tahun-2020-universitas-brawijaya/" target="_blank"><img width="100%" data-src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://unsri.ac.id/wp-content/uploads/2020/04/small-banner-du-snmptn-01.png" class="lazyload" src="<?= base_url('assets/img/banner-akademik.png') ?>"><noscript><img src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://unsri.ac.id/wp-content/uploads/2020/04/small-banner-du-snmptn-01.png" width="100%"></noscript></a></div>
                        <div class="col-md-10 col-sm-6 col-xs-6"> <a title="Informasi Ensiklopedia FKM-UNSRI" style="margin-bottom:15px;display:block" href="https://wiki.unsri.ac.id/" target="_blank"><img width="100%" data-src="https://suliet.unsri.ac.id/images/suliet.jpg" class="lazyload" src="<?= base_url('assets/img/banner-akademik.png') ?>"><noscript><img width="100%" data-src="https://suliet.unsri.ac.id/images/suliet.jpg" class="lazyload" src="<?= base_url('assets/img/banner-akademik.png') ?>"><noscript><img src="https://suliet.unsri.ac.id/images/suliet.jpg" width="100%"></noscript></noscript></a></div>
                        <div class="col-md-10 col-sm-12 col-xs-12 hidden-xs hidden-sm"> <a title="Gapura FKM-UNSRI kini tersedia dalam Versi Mobile" style="margin-bottom:15px;display:block" href="https://bits.unsri.ac.id" target="_blank"><img width="100%" data-src="<?= base_url('assets/img/banner-akademik.png') ?>" class="lazyload" src="<?= base_url('assets/img/banner-akademik.png') ?>"><noscript><img width="100%" data-src="<?= base_url('assets/img/banner-akademik.png') ?>" class="lazyload" src="<?= base_url('assets/img/banner-akademik.png') ?>"><noscript><img src="<?= base_url('assets/img/banner-akademik.png') ?>" width="100%"></noscript></noscript></a></div>
                        <div class="col-md-12 col-sm-12 col-xs-12 hidden-md hidden-lg"> <a title="Gapura FKM-UNSRI kini tersedia dalam Versi Mobile" style="margin-bottom:15px;display:block" href="https://bits.unsri.ac.id" target="_blank"><img width="100%" data-src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://unsri.ac.id/wp-content/uploads/2020/01/banner-promo-gapura-mobile-sm-02.png" class="lazyload" src="<?= base_url('assets/img/banner-akademik.png') ?>"><noscript><img src="https://cdn.shortpixel.ai/client/q_lossless,ret_img/https://unsri.ac.id/wp-content/uploads/2020/01/banner-promo-gapura-mobile-sm-02.png" width="100%"></noscript></a></div>
                        <div class="col-md-12 col-sm-4 col-xs-4" style="display:none"> <a style="margin-bottom:15px;display:block" href="https://sapto.banpt.or.id/c/001019/6174" target="_blank"><img width="128px" data-src="https://cdn.shortpixel.ai/client/q_lossless,ret_img,w_128/https://unsri.ac.id/wp-content/uploads/2018/12/akreditasi-ub-ban-pt-2018-2023.png" class="lazyload" src="<?= base_url('assets/img/banner-akademik.png') ?>"><noscript><img src="https://cdn.shortpixel.ai/client/q_lossless,ret_img,w_128/https://unsri.ac.id/wp-content/uploads/2018/12/akreditasi-ub-ban-pt-2018-2023.png" width="128px"></noscript></a></div>
                        <div class="col-md-12 col-sm-4 col-xs-4" style="display:none"> <a style="margin-bottom:15px;display:block" href="https://unsri.ac.id/id/pengisian-kuesioner-survey-tingkat-kepuasan-pengguna-layanan-blu-pendidikan/" target="_blank"><img width="128px" data-src="https://cdn.shortpixel.ai/client/q_lossless,ret_img,w_128/https://unsri.ac.id/wp-content/uploads/2019/08/Pengisian-Kuesioner-Survey-Tingkat-Kepuasan-Pengguna-Layanan-BLU-Pendidikan-01.png" class="lazyload" src="<?= base_url('assets/img/banner-akademik.png') ?>"><noscript><img src="https://cdn.shortpixel.ai/client/q_lossless,ret_img,w_128/https://unsri.ac.id/wp-content/uploads/2019/08/Pengisian-Kuesioner-Survey-Tingkat-Kepuasan-Pengguna-Layanan-BLU-Pendidikan-01.png" width="128px"></noscript></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="home-headline home-row">
        <div class="container">

            <div id="panel-spotlight" class="panel panel-home panel-headline">
                <marquee loop="100" direction="up" id="myMarquee" scrollamount="2" height="40px" onmouseover="this.stop()" onmouseout="this.start()">


                    </ul>
                </marquee>
                <style>
                    /*  */

                    /* --end kpb */
                    .recent {
                        position: relative;
                        border-radius: 5px;
                        background: #d536f1;
                        color: #000;
                        list-style: none;
                        margin: 0 0 0 0;
                        padding: 0 0 0 0;
                    }

                    .recent:after {
                        display: block;
                        clear: both;
                        content: '';
                    }

                    .recent li {
                        float: left;
                    }

                    .recent a {
                        position: relative;
                        display: block;
                        padding: 10px 10px 10px 10px;
                        line-height: 20px;
                        color: #000;
                    }

                    .recent a:after {
                        content: '';
                        display: block;
                        position: absolute;
                        z-index: 2;
                        right: -4px;
                        top: 0;
                        border-left: solid 10px #ccc;
                        border-top: solid 20px transparent;
                        border-bottom: solid 20px transparent;
                    }

                    .recent a:before {
                        content: '';
                        display: block;
                        position: absolute;
                        z-index: 1;
                        left: -5px;
                        top: 0;
                        border-left: solid 10px #888;
                        border-top: solid 20px transparent;
                        border-bottom: solid 20px transparent;
                    }

                    .recent li:first-child a:before,
                    .recent li:last-child a:after {
                        display: none;
                    }
                </style>
                <div class="panel-heading serif ">

                    <h3 class="panel-title"> Topik Utama</h3>
                </div>
                <div class="row" id="news-list">


                </div>
                <div class="text-center go-to-archive"> <a class="btn btn-sm btn-primary btn-archive" href="<?= base_url('hot_news') ?>" target="_blank"><i class="fa fa-archive"></i> Topik Utama Lainnya </a></div>
            </div>
        </div>
    </section>
    <section class="home-row home-news bg-lite-gray">
        <div class="container">
            <div class="row">
                <div class=" col-md-4 col-sm-4 col-xs-12">
                    <div id="panel-news" class="panel panel-home panel-news ">
                        <div class="panel-heading no-radius">
                            <h3 class="serif panel-title"> Berita Lainnya</h3>
                        </div>
                        <div class="panel-body" id='berita-lainnya'>


                        </div>
                        <div class="text-center go-to-archive"> <a class="btn btn-sm btn-primary btn-archive" href="<?= base_url('other_news') ?>" target="_blank"><i class="fa fa-newspaper-o"></i> Berita Lainnya </a></div>
                    </div>
                </div>
                <div class=" col-md-4 col-sm-4 col-xs-12 pull-right">
                    <div id="panel-announcement" class="panel panel-home panel-news">
                        <div class="panel-heading ">
                            <h3 class="serif panel-title"> Pengumuman</h3>
                        </div>
                        <div class="panel-body">
                            <div class="quicklinks-box">
                                <div id="rpjc_widget_cat_recent_posts-2" class="rpjc_widget_cat_recent_posts widget_recent_entries">
                                    <div id='pengumuman'>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center go-to-archive"> <a class="btn btn-sm btn-primary btn-archive" href="<?= base_url('announcement') ?>" role="button"><i class="fa fa-bullhorn"></i> Pengumuman Lainnya </a></div>
                    </div>
                </div>
                <div class=" col-md-4 col-sm-4 col-xs-12">
                    <div id="panel-event" class="panel panel-home panel-event panel-news">
                        <div class="panel-heading no-radius">
                            <h3 class="serif panel-title"> Kegiatan</h3>
                        </div>
                        <div class="panel-body">
                            <div class="quicklinks-box">
                                <div id="rpjc_widget_cat_recent_posts-4" class="rpjc_widget_cat_recent_posts widget_recent_entries">
                                    <div id="kegiatan">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center go-to-archive"> <a class="btn btn-sm btn-warning btn-archive" href="<?= base_url('activities') ?>" role="button"><i class="fa fa-calendar"></i> Kegiatan Lainnya </a></div>
                        <div id="event-triangle"></div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Logo FFOOTER -->
    <section class="home-info home-row" style="background-color:#e2e2e2;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="row ">
                        <div class="col-xs-6 col-sm-6 col-md-4 "> <a title="Universitas Sriwijaya English Proficiency Test" style="display:block; margin-bottom:10px ; padding : 30px 50px  30px 50px" href="https://suliet.unsri.ac.id/" target="_blank"><img width="100%" data-src="<?= base_url('assets/img/banner-usept.png') ?>" class="lazyload" src="<?= base_url('assets/img/banner-usept.png') ?>"><noscript><img width="100%" data-src="<?= base_url('assets/img/banner-usept.png') ?>" class="lazyload" src="<?= base_url('assets/img/banner-usept.png') ?>"><noscript><img src="<?= base_url('assets/img/banner-usept.png') ?>" width="100%"></noscript></noscript></a></div>
                        <div class="col-xs-6 col-sm-6 col-md-4 "> <a title="Uiversitas Srijiyata" href="https://unsri.ac.id/" style="display:block; margin-bottom:10px ; padding : 30px 50px  30px 50px" target="_blank"><img width="100%" data-src="<?= base_url('assets/img/banner-unsri1.png') ?>" class="lazyload" src="<?= base_url('assets/img/banner-unsri1.png') ?>"><noscript><img src="<?= base_url('assets/img/banner-unsri1.png') ?>" width="100%"></noscript></a></div>
                        <div class="col-xs-6 col-sm-6 col-md-4 "> <a title="Sistem Informasi Akademik Unsri" style="display:block; margin-bottom:10px ; padding : 30px 50px  30px 50px" href="https://akademik.unsri.ac.id/" target="_blank"><img width="100%" data-src="<?= base_url('assets/img/banner-akademik.png') ?>" class="lazyload" src="<?= base_url('assets/img/banner-akademik.png') ?>"><noscript><img width="100%" data-src="<?= base_url('assets/img/banner-akademik.png') ?>" class="lazyload" src="<?= base_url('assets/img/banner-akademik.png') ?>"><noscript><img src="<?= base_url('assets/img/banner-akademik.png') ?>" width="100%"></noscript></noscript></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } else { ?>
    <section class="full-screen home-full">
        <section class="home-video local-video">

            <div id="custom_html-2" class="widget_text ">
                <?php if (!empty($head[0])) {
                    if ($head[0]['tipe'] == 'img') {
                        echo  '    <div id="metaslider_widget-2" class="home-modal">
            <div id="metaslider_container_481">
            <div id="metaslider_481" class="flexslider">
            <div class="flex-viewport" style="overflow: hidden; position: relative;">
            <ul aria-live="polite" class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(-960px, 0px, 0px);">
            
            
            
            ';

                        foreach ($head as $value) {
                            $k = ' <li style="display: block; width: 320px; margin-right: 0px; float: left;" class="slide-2848 ms-image" data-thumb-alt="" aria-hidden="true">
                       <img height="900" width="100%" alt="" title="mobile-slider-01" data-src="' . base_url('uploads/header_dir/') . $value['header_dir'] . '" class="slider-481 slide-2848 ls-is-cached lazyloaded" src="' . base_url('uploads/header_dir/') . $value['header_dir'] . '" draggable="false">
                   
                            </li>';
                            echo $k;
                        }

                        echo '               </ul>
                    </div>
                </div>
            </div>
        </div>';
                    }

                    if ($head[0]['tipe'] == 'vid') {
                        echo ' <video autoplay loop muted playsinline controls class="videogif" style="width: 100%">
        <source src="' . base_url('uploads/header_dir/') . $head[0]['header_dir']  . '" type="video/mp4" />
        <p>Your browser does not support the video element.</p>
    </video>';
                    }
                }; ?>
            </div>
        </section>

        <section class="home-jump">
            <div class="container" style="display:none">
            </div>
            <div class="container">
                <div class="menu-ub-jump-container">
                    <ul id="menu-ub-jump" class="menu">
                        <li id="menu-item-1243" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1243"><a href="#panel-spotlight">Headline</a></li>
                        <li id="menu-item-1244" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1244"><a href="#panel-news">News</a></li>
                        <li id="menu-item-1245" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1245"><a href="#panel-event">Activities</a></li>
                        <li id="menu-item-1246" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1246"><a href="#panel-announcement">Announcement</a></li>
                        <!-- <li id="menu-item-1247" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1247"><a href="#section-ub-fact">Fakta FKM-UNSRI</a></li> -->
                        <li id="menu-item-1546" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1546"><a href="<?= base_url() ?>about/achievements/">Achievement</a></li>
                        <li id="menu-item-1244" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1244"><a href="<?= base_url() ?>galery">Galery</a></li>
                        <li id="menu-item-1342" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1342"><a href="https://www.youtube.com/channel/UC2FccwVoAV3jH-WFPafov_g"><i class="fa fa-youtube-play"></i> Livestream</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </section>
    <section class="home-headline home-row">
        <div class="container">
            <div id="panel-spotlight" class="panel panel-home panel-headline">
                <div class="panel-heading serif ">
                    <h3 class="panel-title"> Main Topic</h3>
                </div>
                <div class="row" id="news-list">


                </div>
                <div class="text-center go-to-archive"> <a class="btn btn-sm btn-primary btn-archive" href="<?= base_url('hot_news') ?>" target="_blank"><i class="fa fa-archive"></i> Others Main Topic </a></div>
            </div>
        </div>
    </section>
    <section class="home-row home-news bg-lite-gray">
        <div class="container">
            <div class="row">
                <div class=" col-md-4 col-sm-4 col-xs-12">
                    <div id="panel-news" class="panel panel-home panel-news ">
                        <div class="panel-heading no-radius">
                            <h3 class="serif panel-title"> Others News</h3>
                        </div>
                        <div class="panel-body" id='berita-lainnya'>


                        </div>
                        <div class="text-center go-to-archive"> <a class="btn btn-sm btn-primary btn-archive" href="<?= base_url('other_news') ?>" target="_blank"><i class="fa fa-newspaper-o"></i> Others News</a></div>
                    </div>
                </div>
                <div class=" col-md-4 col-sm-4 col-xs-12 pull-right">
                    <div id="panel-announcement" class="panel panel-home panel-news">
                        <div class="panel-heading ">
                            <h3 class="serif panel-title"> Announcement</h3>
                        </div>
                        <div class="panel-body">
                            <div class="quicklinks-box">
                                <div id="rpjc_widget_cat_recent_posts-2" class="rpjc_widget_cat_recent_posts widget_recent_entries">
                                    <div id='pengumuman'>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center go-to-archive"> <a class="btn btn-sm btn-primary btn-archive" href="<?= base_url('announcement') ?>" role="button"><i class="fa fa-bullhorn"></i> Others Announcement </a></div>
                    </div>
                </div>
                <div class=" col-md-4 col-sm-4 col-xs-12">
                    <div id="panel-event" class="panel panel-home panel-event panel-news">
                        <div class="panel-heading no-radius">
                            <h3 class="serif panel-title"> Activities</h3>
                        </div>
                        <div class="panel-body">
                            <div class="quicklinks-box">
                                <div id="rpjc_widget_cat_recent_posts-4" class="rpjc_widget_cat_recent_posts widget_recent_entries">
                                    <div id="kegiatan">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center go-to-archive"> <a class="btn btn-sm btn-warning btn-archive" href="<?= base_url('activities') ?>" role="button"><i class="fa fa-calendar"></i> Others Activities</a></div>
                        <div id="event-triangle"></div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Logo FFOOTER -->
    <section class="home-info home-row" style="background-color:#e2e2e2;">
        <div class="container">
            <div class="row ">
                <br>
                <br>
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="row ">
                        <div class="col-xs-6 col-sm-6 col-md-4 "> <a title="Suliet UNSRI" style="display:block; margin-bottom:10px ; padding : 40px 20px  30px 20px" href="https://suliet.unsri.ac.id/" target="_blank"><img width="100%" data-src="<?= base_url('assets/img/banner-usept.png') ?>" class="lazyload" src="<?= base_url('assets/img/banner-usept.png') ?>"><noscript><img width="100%" data-src="<?= base_url('assets/img/banner-usept.png') ?>" class="lazyload" src="<?= base_url('assets/img/banner-akademik.png') ?>"><noscript><img src="<?= base_url('assets/img/banner-usept.png') ?>" width="100%"></noscript></noscript></a></div>
                        <div class="col-xs-6 col-sm-6 col-md-4 "> <a title="Uiversitas Srijiyata" href="https://unsri.ac.id/" style="display:block; margin-bottom:10px ; padding : 30px 50px  30px 50px" target="_blank"><img width="100%" data-src="<?= base_url('assets/img/banner-unsri1.png') ?>" class="lazyload" src="<?= base_url('assets/img/banner-unsri1.png') ?>"><noscript><img src="<?= base_url('assets/img/banner-unsri1.png') ?>" width="100%"></noscript></a></div>
                        <div class="col-xs-6 col-sm-6 col-md-4 "> <a title="Sistem Informasi Akademik Unsri" style="display:block; margin-bottom:10px ; padding :40px 20px  30px 20px" href="https://akademik.unsri.ac.id/" target="_blank"><img width="100%" data-src="<?= base_url('assets/img/banner-akademik.png') ?>" class="lazyload" src="<?= base_url('assets/img/banner-akademik.png') ?>"><noscript><img width="100%" data-src="<?= base_url('assets/img/banner-akademik.png') ?>" class="lazyload" src="<?= base_url('assets/img/banner-akademik.png') ?>"><noscript><img src="<?= base_url('assets/img/banner-akademik.png') ?>" width="100%"></noscript></noscript></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>





<?php }; ?>

</div>
<a href="#" id="scroll"><i class="fa fa-angle-up"></i></a>

<style>
    .modal {
        display: none;
        position: fixed;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0);
    }

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
<div class="modal" id="myModal" tabindex="-1" style="width: 100%;">
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

<script>

</script>

<script type='text/javascript'>
    $(document).ready(function() {

        var news_list = $('#news-list');
        var lainnya = $('#berita-lainnya');
        var kegiatan = $('#kegiatan');
        var pengumuman = $('#pengumuman');
        var papan_pengumuman = $('#papan_pengumuman');

        var recent_bar = $('#myMarquee');

        // console.log('asd')
        var Photo2Modal = {
            'self': $('#photo2_modal'),
            'info': $('#photo2_modal').find('.infoy'),
            'images': $('#photo2_modal').find('.carousel-inner'),
            // 'indicators': $('#photo2_modal').find('.carousel-indicators'),
        };
        // show();

        // function show() {
        //     Photo2Modal.self.modal('show');
        //  Photo2Modal.
        // }


        getAllRecent();

        function getAllRecent() {
            return $.ajax({
                url: `<?php echo site_url('NewsController/getAllRecent/') ?>`,
                'type': 'GET',
                data: {
                    recent: true
                },
                success: function(data) {
                    // swal.close();
                    var json = JSON.parse(data);
                    if (json['error']) {
                        return;
                    }
                    dataRecent = json['data'];
                    renderRecent(dataRecent);
                },
                error: function(e) {}
            });
        }


        getAllNews();

        function getAllNews() {
            return $.ajax({
                url: `<?php echo site_url('NewsController/getAll/') ?>`,
                'type': 'GET',
                data: {
                    topik_utama: true
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


        getAllBeritaLainya();

        function getAllBeritaLainya() {
            return $.ajax({
                url: `<?php echo site_url('NewsController/getAll/') ?>`,
                'type': 'GET',
                data: {
                    berita_lainnya: true
                },
                success: function(data) {
                    // swal.close();
                    var json = JSON.parse(data);
                    if (json['error']) {
                        return;
                    }
                    data = json['data'];
                    renderLainnya(data);
                },
                error: function(e) {}
            });
        }

        getAllKegiatan();

        function getAllKegiatan() {
            return $.ajax({
                url: `<?php echo site_url('NewsController/getAll/') ?>`,
                'type': 'GET',
                data: {
                    kegiatan: true
                },
                success: function(data) {
                    // swal.close();
                    var json = JSON.parse(data);
                    if (json['error']) {
                        return;
                    }
                    data = json['data'];
                    renderKegiatan(data);
                },
                error: function(e) {}
            });
        }

        getAllPengumuman();

        function getAllPengumuman() {
            return $.ajax({
                url: `<?php echo site_url('NewsController/getAll/') ?>`,
                'type': 'GET',
                data: {
                    pengumuman: true
                },
                success: function(data) {
                    // swal.close();
                    var json = JSON.parse(data);
                    if (json['error']) {
                        return;
                    }
                    data = json['data'];
                    renderPengumuman(data);
                },
                error: function(e) {}
            });
        }

        getAllPapanPengumuman();

        function getAllPapanPengumuman() {
            return $.ajax({
                url: `<?php echo site_url('NewsController/getPapanPengumuman/') ?>`,
                'type': 'GET',
                data: {
                    // pengumuman: true
                },
                success: function(data) {
                    // swal.close();
                    var json = JSON.parse(data);
                    if (json['error']) {
                        return;
                    }
                    data = json['data'];
                    renderPapanPengumuman(data);
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
            // console.log(data);
            Object.values(data).forEach((news) => {
                if (i < 6) {
                    <?php if ($_COOKIE['lang_set'] == 'in') { ?>

                        var panjang = news['berita_isi'] ? news['berita_isi'] : 'kosong';
                        if (panjang == 'kosong') {
                            p = '';
                        } else {
                            var index_p = panjang.lastIndexOf("</p>", 100);
                            if (index_p == (-1)) {
                                index_p = 30
                            }
                            var p = panjang.substring(0, index_p);
                            p = p.replace("<p>", "");
                            p = p.replace("</p>", "");
                            p = p.substring(0, 100);
                            console.log(index_p)
                        }

                        news_list.append(`
                        <div class="col-lg-4 col-md-4 col-xs-12 headline-item " style="padding:0px 10px 0px 10px">
                        <div class="headline-thumbnail sub-thumbnail"> <a class="headline-link " style=" margin-left: auto; margin-right: auto; width: 293px; height: 160px;"> 
                        <img style="object-fit:cover" data-src="<?= base_url('uploads/berita_image/') ?>${news['berita_image']}" class="lazyload" />
                                  </a></div>
                        <div class="headline-text text-center">
                            <h4 class=" headline-title  trim-text serif " title='${news['berita_judul']}'> <a class="headline-link  animated" href="<?= base_url('post/'); ?>${news['slug']}" title="Read ${news['berita_judul']}"> ${news['berita_judul']} </a></h4>
                            <div class="headline-description trim-text trim-four">${p}... <a href="<?= base_url('post/'); ?>${news['slug']}">Read more</a></div>
                        </div>
                    </div>`);

                    <?php } else { ?>

                        var panjang = news['berita_isi_en'] ? news['berita_isi_en'] : 'kosong';
                        if (panjang == 'kosong') {
                            p = '';
                        } else {
                            var index_p = panjang.lastIndexOf("</p>", 100);
                            if (index_p == (-1)) {
                                index_p = 30
                            }
                            var p = panjang.substring(0, index_p);
                            p = p.replace("<p>", "");
                            p = p.replace("</p>", "");
                            p = p.substring(0, 100);
                            console.log(index_p)
                        }

                        news_list.append(`
                        <div class="col-lg-4 col-md-4 col-xs-12 headline-item " style="padding:0px 10px 0px 10px">
                        <div class="headline-thumbnail sub-thumbnail"> <a class="headline-link " style=" margin-left: auto; margin-right: auto; width: 293px; height: 160px;"> 
                        <img style="object-fit:cover" data-src="<?= base_url('uploads/berita_image/') ?>${news['berita_image']}" class="lazyload" />
                                  </a></div>
                        <div class="headline-text text-center">
                            <h4 class=" headline-title  trim-text serif " title='${news['berita_judul_en']}'> <a class="headline-link  animated" href="<?= base_url('post/'); ?>${news['slug']}" title="Read ${news['berita_judul_en']}"> ${news['berita_judul_en']} </a></h4>
                            <div class="headline-description trim-text trim-four">${p}... <a href="<?= base_url('post/'); ?>${news['slug']}">Read more</a></div>
                        </div>
                    </div>`);

                    <?php }; ?>

                    i++;
                }
            });


        }

        function renderRecent(data) {
            if (data == null || typeof data != "object") {
                console.log("Product::UNKNOWN DATA");
                return;
            }
            recent_bar.empty();
            // console.log(data);
            Object.values(data).forEach((news) => {

                <?php if ($_COOKIE['lang_set'] == 'in') { ?>
                    // <div class="media">
                    //             <div class="media-body">
                    //                 <div class="post-date small">${news['berita_tanggal']}</div>
                    //                 <h4 class="media-heading serif"> <a href='<?= base_url() ?>post/${news['slug']}' title='${news['berita_judul']}'> ${news['berita_judul']} </a></h4>
                    //             </div>
                    //         </div>

                    recent_bar.append(`
                    <br>
                    <ul class="recent" style="padding-bottom: 0px;">
                        <li><a href="#">${news['nama_jenis_berita']}</a></li>
                        <li><a href="<?= base_url() ?>post/${news['slug']}">${news['berita_judul']}</a></li>
                    </ul>
                       `);
                <?php } else { ?>
                    recent_bar.append(`
                    <br>
                    <ul class="recent" style="padding-bottom: 0px;">
                        <li><a href="#">${news['nama_jenis_berita_en']}</a></li>
                        <li><a href="<?= base_url() ?>post/${news['slug']}">${news['berita_judul_en']}</a></li>
                    </ul>   `);
                <?php }; ?>


            });
        }

        function renderLainnya(data) {
            if (data == null || typeof data != "object") {
                console.log("Product::UNKNOWN DATA");
                return;
            }
            lainnya.empty();
            // console.log(data);
            Object.values(data).forEach((news) => {
                <?php if ($_COOKIE['lang_set'] == 'in') { ?>
                    lainnya.append(`
                        <div class="media">
                                <div class="media-body">
                                    <div class="post-date small">${news['berita_tanggal']}</div>
                                    <h4 class="media-heading serif"> <a href='<?= base_url() ?>post/${news['slug']}' title='${news['berita_judul']}'> ${news['berita_judul']} </a></h4>
                                </div>
                            </div>
                  `);
                <?php } else { ?>
                    lainnya.append(`
                        <div class="media">
                                <div class="media-body">
                                    <div class="post-date small">${news['berita_tanggal']}</div>
                                    <h4 class="media-heading serif"> <a href='<?= base_url() ?>post/${news['slug']}' title='${news['berita_judul_en']}'> ${news['berita_judul_en']} </a></h4>
                                </div>
                            </div>
                  `);
                <?php }; ?>


            });
        }

        function renderKegiatan(data) {
            if (data == null || typeof data != "object") {
                console.log("Product::UNKNOWN DATA");
                return;
            }
            kegiatan.empty();
            // console.log(data);
            Object.values(data).forEach((news) => {

                <?php if ($_COOKIE['lang_set'] == 'in') { ?>
                    kegiatan.append(`
                        <div class="media">
                                <div class="media-body">
                                    <div class="post-date small">${news['berita_tanggal']}</div>
                                    <h4 class="media-heading serif"> <a href='<?= base_url() ?>post/${news['slug']}' title='${news['berita_judul']}'> ${news['berita_judul']} </a></h4>
                                </div>
                            </div>
                  `);
                <?php } else { ?>
                    kegiatan.append(`
                        <div class="media">
                                <div class="media-body">
                                    <div class="post-date small">${news['berita_tanggal']}</div>
                                    <h4 class="media-heading serif"> <a href='<?= base_url() ?>post/${news['slug']}' title='${news['berita_judul_en']}'> ${news['berita_judul_en']} </a></h4>
                                </div>
                            </div>
                  `);
                <?php }; ?>


            });
        }

        function renderPengumuman(data) {
            if (data == null || typeof data != "object") {
                console.log("Product::UNKNOWN DATA");
                return;
            }
            pengumuman.empty();
            // console.log(data);
            Object.values(data).forEach((news) => {

                <?php if ($_COOKIE['lang_set'] == 'in') { ?>
                    pengumuman.append(`
                        <div class="media">
                                <div class="media-body">
                                    <div class="post-date small">${news['berita_tanggal']}</div>
                                    <h4 class="media-heading serif"> <a href='<?= base_url() ?>post/${news['slug']}' title='${news['berita_judul']}'> ${news['berita_judul']} </a></h4>
                                </div>
                            </div>
                  `);
                <?php } else { ?>
                    pengumuman.append(`
                        <div class="media">
                                <div class="media-body">
                                    <div class="post-date small">${news['berita_tanggal']}</div>
                                    <h4 class="media-heading serif"> <a href='<?= base_url() ?>post/${news['slug']}' title='${news['berita_judul_en']}'> ${news['berita_judul_en']} </a></h4>
                                </div>
                            </div>
                  `);
                <?php }; ?>

            });
        }

        function renderPapanPengumuman(data) {
            if (data == null || typeof data != "object") {
                console.log("Product::UNKNOWN DATA");
                return;
            }
            papan_pengumuman.empty();
            // console.log(data);
            var modal = document.getElementById("myModal");
            var span = document.getElementsByClassName("closemodal")[0];


            if (data['act'] == '1') {
                <?php if ($_COOKIE['lang_set'] == 'in') { ?>
                    papan_pengumuman.append(data['pengumuman']);
                <?php } else { ?>
                    papan_pengumuman.append(data['pengumuman_en']);
                <?php }; ?>

                modal.style.display = "block";
                $('#myModal').modal('show');
            } else {
                $('#myModal').modal('hiden');
            }


        }





    });
</script>