<div class="page-container container">
    <div class="row">
        <div class="col-md-12 entry-content">
            <article>
                <div data-vc-full-width="true" data-vc-full-width-init="true" class="row wpb_row row-fluid custom_1493891461405" style="position: relative; left: -27.5px; box-sizing: border-box; width: 835px; padding-left: 27.5px; padding-right: 27.5px;">
                    <div class="wpb_column column_container col-sm-12">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div id="mgt-post-list-85129785" class="mgt-post-list wpb_content_element animated mgt-post-list-style-rounded">
                                    <?php foreach ($dataSkripsi as $x) { ?>
                                        <?php if (!empty($x['judul_skripsi'])) { ?>

                                        <div class="mgt-post normal-blocks post-has-image">
                                            <a href="<?= base_url('library/skripsi/') . $x['nim'] ?>">
                                                <div class="mgt-post-image" data-style="background-image: url(<?= base_url('uploads/cover/') . $x['cover'] ?>);" style="background-image: url(<?= base_url('uploads/cover/') . $x['cover'] ?>);">
                                                    <div class="mgt-post-image-wrapper">
                                                        <div class="mgt-post-wrapper-icon"><i class="fa fa-plus"></i></div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="mgt-post-details">
                                                <div class="mgt-post-icon format-standard"></div>
                                                <div class="mgt-post-date">
                                                    <!-- <?= $x['nama_prodi'] ?> / -->
                                                    Author : <?= $x['nama'] ?> / Year : <?= $x['tahun_skripsi'] ?>
                                                </div>
                                                <div class="mgt-post-title">
                                                    <a href="<?= base_url('library/skripsi/') . $x['nim'] ?>">
                                                        <h5><?= $x['judul_skripsi'] ?></h5>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <?php }else{ ?>

                                            <div class="mgt-post normal-blocks post-has-image">
                                            <a href="<?= base_url('library/journal/') . $x['id_jurnal'] ?>">
                                                <div class="mgt-post-image" data-style="background-image: url(<?= base_url('uploads/cover/') . $x['cover'] ?>);" style="background-image: url(<?= base_url('uploads/cover/') . $x['cover'] ?>);">
                                                    <div class="mgt-post-image-wrapper">
                                                        <div class="mgt-post-wrapper-icon"><i class="fa fa-plus"></i></div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="mgt-post-details">
                                                <div class="mgt-post-icon format-standard"></div>
                                                <div class="mgt-post-date">
                                                    Author : <?= $x['nama_pengarang'] ?> / Vol : <?= $x['vol'] ?>
                                                </div>
                                                <div class="mgt-post-title">
                                                    <a href="<?= base_url('library/journal/') . $x['id_jurnal'] ?>">
                                                        <h5><?= $x['judul_jurnal'] ?></h5>

                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <?php } ?>

                                    <?php } ?>

                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row-full-width clearfix"></div>
                <div class="col-md-12">
                    <div class="text-center">
                        <ul class="pagination " style="visibility: visible; ">
                            <div class="pagging text-center">
                                <nav>
                                    <ul class="pagination justify-content-center" id='pagination'>
                                        <?php if ($contentData['page'] > '1') { ?>
                                            <?php if ($contentData['cuurent'] > '1') { ?>
                                                <li class="page-item"><span class="page-link"><a href="<?= base_url() ?>library/search?s=<?= $contentData['clue'] ?>&page=<?=($contentData['cuurent']-1)?>">Prev</a></span></li>

                                           <?php

                                            }
                                            for ($i = 1; $i <= $contentData['page']; $i++) {
                                                echo '<li class="page-item"><span class="page-link" ><a href="' . base_url() . 'library/search?s=' . $contentData['clue'] . '&page=' . $i . '">' . $i . '</a></span></li>';
                                            }

                                             if ($contentData['cuurent'] != $contentData['page'] ) {
                                                ?>
                                                       <li class="page-item"><span class="page-link"><a href="<?= base_url() ?>library/search?s=<?= $contentData['clue'] ?>&page=<?=($contentData['cuurent']+1)?>">Next</a></span></li>

                                          <?php   }
                                        } ?>
                                    </ul>
                                </nav>
                            </div>
                        </ul>
                    </div>
                </div>
            </article>
            <!-- <article>
                <div class="row wpb_row row-fluid custom_1491403460554 row-o-equal-height row-flex">
                    <div class="wpb_column column_container col-sm-3">
                        <div class="column-inner custom_1487239752272">
                            <div class="wpb_wrapper"></div>
                        </div>
                    </div>
                    <div class="wpb_column column_container col-sm-6">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="mgt-header-block clearfix text-center text-black wpb_content_element mgt-header-block-style-2 mgt-header-block-fontsize-medium mgt-header-texttransform-none mgt-header-block-29874047 custom_1491835240983">
                                    <h2 class="mgt-header-block-title text-font-weight-default">Skripsi</h2>
                                    <div class="mgt-header-line mgt-header-line-margin-small"></div>
                                </div>
                                <div class="wpb_text_column wpb_content_element text-size-medium">
                                    <div class="wpb_wrapper">
                                        <p style="text-align: center;">Sukses bukanlah kebetulan. Ia terbentuk dari kerja keras, ketekunan, pembelajaran, pengorbanan, dan yang paling penting, cinta akan hal yang sedang atau ingin kau lakukan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column column_container col-sm-3">
                        <div class="column-inner">
                            <div class="wpb_wrapper"></div>
                        </div>
                    </div>
                </div>
                <div data-vc-full-width="true" data-vc-full-width-init="false" class="row wpb_row row-fluid custom_1493891461405">
                            <div class="wpb_column column_container col-sm-12">
                                <div class="column-inner">
                                    <div class="wpb_wrapper">
                                        <div id="mgt-post-list-85129785" class="mgt-post-list wpb_content_element animated mgt-post-list-style-rounded">
                                                          <?php foreach ($dataSkripsi as $x) { ?>

                                            <div class="portfolio-item-block text-left portfolio-item-animation-1 mix agency app-design services uiux" data-item="1" data-name="Designer’s Tool Kit" style="display: inline-block;">
                                                <div class="portfolio-item-block-inside">
                                                    <a href="<?= base_url('library/skripsi/') . $x['nim'] ?>" target="_self" rel="">
                                                        <div class="portfolio-item-image" data-style="background-image: url(<?= base_url('uploads/cover/') . $x['cover'] ?>);" style="background-image: url(<?= base_url('uploads/cover/') . $x['cover'] ?>);"></div>
                                                        <div class="portfolio-item-bg"></div>

                                                        <div class="info">
                                                            <span class="sub-title"><?= $x['nama_prodi'] ?></span>
                                                            <h4 class="title"><?= $x['judul_skripsi'] ?></h4>
                                                            <div class="project-description">Author : <?= $x['nama'] ?> / Year : <?= $x['tahun_skripsi'] ?></div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php } ?>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="wpb_column column_container col-sm-12">
                        <div class="column-inner">
                            <div class="wpb_wrapper">
                                <div class="mgt-portfolio-grid wpb_content_element">
                                    <div class="portfolio-list portfolio-columns-4 portfolio-grid-layout-4 clearfix" id="portfolio-list-32611939">
                                        <?php foreach ($dataSkripsi as $x) { ?>

                                            <div class="portfolio-item-block text-left portfolio-item-animation-6 slide-item agency app-design services uiux" data-item="1" data-name="Hero &#8211; Iphone Mockup">
                                                <div class="portfolio-item-block-inside">
                                                    <a href="<?= base_url('library/skripsi/') . $x['nim'] ?>" target="_self" rel="">
                                                        <div class="portfolio-item-image" data-style="background-image: url(<?= base_url('uploads/cover/') . $x['cover'] ?>);"></div>
                                                        <div class="portfolio-item-bg"></div>

                                                        <div class="info">
                                                            <span class="sub-title"><?= $x['nama_prodi'] ?></span>
                                                            <h4 class="title"><?= $x['judul_skripsi'] ?></h4>
                                                            <div class="project-description">Author : <?= $x['nama'] ?> / Year : <?= $x['tahun_skripsi'] ?></div>
                                                            <div class="view-more btn mgt-button mgt-button-round-edges-disable">View more</div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-full-width clearfix"></div>
            </article> -->

        </div>
    </div>
</div>
</div>


<script type="text/javascript" src="<?= base_url('assets2/js/') ?>/jquery.js"></script>
<script type="text/javascript" src="<?= base_url('assets2/js/') ?>/jquery-migrate.min.js"></script>

<script type="text/javascript">
    /* <![CDATA[ */
    var thickboxL10n = {
        next: "Next >",
        prev: "< Prev",
        image: "Image",
        of: "of",
        close: "Close",
        noiframes: "This feature requires inline frames. You have iframes disabled or your browser does not support them.",
        loadingAnimation: "http:\/\/wp.magnium-themes.com\/barrel\/barrel-1\/wp-includes\/js\/thickbox\/loadingAnimation.gif",
    };
    /* ]]> */
</script>
<script type="text/javascript">
    /* <![CDATA[ */
    var rlArgs = {
        script: "nivo",
        selector: "lightbox",
        customEvents: "",
        activeGalleries: "1",
        effect: "fade",
        clickOverlayToClose: "1",
        keyboardNav: "1",
        errorMessage: "The requested content cannot be loaded. Please try again later.",
    };
    /* ]]> */
</script>
<script type="text/javascript" src="<?= base_url('assets2/js/') ?>/plugins/responsive-lightbox/assets/nivo/nivo-lightbox.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets2/js/') ?>/plugins/responsive-lightbox/js/frontd.js"></script>
<script type="text/javascript" src="<?= base_url('assets2/js/') ?>/plugins/js-skin.js"></script>
<script type="text/javascript" src="<?= base_url('assets2/js/') ?>/plugins/thickbox/thickbox.js"></script>
<script type="text/javascript" src="<?= base_url('assets2/js/') ?>/plugins/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets2/js/') ?>/plugins/easing.js"></script>
<script type="text/javascript" src="<?= base_url('assets2/js/') ?>/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets2/js/') ?>/plugins/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets2/js/') ?>/plugins/jquery.nanoscroller.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets2/js/') ?>/plugins/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets2/js/') ?>/plugins/TweenMax.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets2/js/') ?>/plugins/template.js"></script>
<script type="text/javascript" src="<?= base_url('assets2/js/') ?>/plugins/js_front.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets2/js/') ?>/plugins/waypoints.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets2/js/') ?>/plugins/jquery.appear.js"></script>
<script type="text/javascript" src="<?= base_url('assets2/js/') ?>/plugins/jquery.countTo.js"></script>
<script type="text/javascript" src="<?= base_url('assets2/js/') ?>/plugins/skrollr.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets2/js/') ?>/plugins/accordion.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets2/js/') ?>/plugins/tta-autoplay.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets2/js/') ?>/plugins/tabs.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets2/js/') ?>/plugins/waypoints.min.js"></script>


<script>
    (function($) {
        $(document).ready(function() {
            function initPortfolioCarousel() {
                $("#portfolio-list-32611939").owlCarousel({
                    items: 3,
                    slideSpeed: 200,
                    itemsDesktop: [1199, 3],
                    itemsDesktopSmall: [979, 3],
                    itemsTablet: [768, 2],
                    itemsMobile: [479, 1],
                    autoPlay: true,
                    navigation: false,
                    navigationText: false,
                    pagination: false,
                    afterInit: function(elem) {
                        $(this).css("display", "block");
                    },
                });
            }

            setTimeout(initPortfolioCarousel, 1000);
        });
    })(jQuery);
</script>
<script>
    (function($) {
        $(document).ready(function() {
            $("#portfolio-list-59222344").mixItUp({
                effects: ["fade", "scale"],
                easing: "snap"
            });
        });
    })(jQuery);
</script>
<script>
    (function($) {
        $(document).ready(function() {
            $("#portfolio-list-49711243").mixItUp({
                effects: ["fade", "scale"],
                easing: "snap"
            });
        });
    })(jQuery);
</script>
<script>
    (function($) {
        $(document).ready(function() {
            $("#portfolio-list-16092706").mixItUp({
                effects: ["fade", "scale"],
                easing: "snap"
            });
        });
    })(jQuery);
</script>


<script>
    (function($) {
        $(document).ready(function() {
            function initPortfolioCarousel() {
                $("#portfolio-list-63483046").owlCarousel({
                    items: 1,
                    slideSpeed: 200,
                    itemsDesktop: [1199, 1],
                    itemsDesktopSmall: [979, 1],
                    itemsTablet: [768, 1],
                    itemsMobile: [479, 1],
                    autoPlay: true,
                    navigation: false,
                    navigationText: false,
                    pagination: false,
                    afterInit: function(elem) {
                        $(this).css("display", "block");
                    },
                });
            }

            setTimeout(initPortfolioCarousel, 1000);
        });
    })(jQuery);
</script>





</body>

</html>