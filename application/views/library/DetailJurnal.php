<div class="page-container container">
    <div class="row">
        <div class="col-md-12 entry-content">
            <article id="post-590" class="post-590 post type-post status-publish format-standard has-post-thumbnail hentry category-clients category-company tag-clients tag-news">
                <div class="post-content-wrapper">
                    <div class="post-content">
                        <div class="entry-content">
                            <h1 class="text-center"><?= $dataSkripsi['judul_jurnal'] ?></h1>
                            <br>
                            <h4>
                                Author : <?= $dataSkripsi['nama_pengarang'] ?> / Vol. <?= $dataSkripsi['vol'] ?>
                            </h4>
                            <h4>
                                <?= $dataSkripsi['institusi'] ?>
                            </h4>
                            <p>
                                <?= $dataSkripsi['deskripsi'] ?>
                            </p>
                            <div class="col-md-9">
                                <h2>Abstrak</h2>

                                <blockquote>
                                    <p><?= $dataSkripsi['abstrak'] ?></p>
                                </blockquote>
                                <?php if (!empty($dataSkripsi['jurnal'])) { ?>

                                    <embed type="application/pdf" src="<?= base_url('uploads/jurnal/') . $dataSkripsi['jurnal'] ?>" width="100%" height="900px"></embed>
                                <?php  } ?>

                                <br>



                                <!-- <div> -->
                            </div>
                            <!-- .entry-content -->
                        </div>
                        <div class="col-md-3">

                            <img width="100%" height="100%" style="padding-bottom: 10px;" src="<?= base_url('uploads/cover/') . $dataSkripsi['cover'] ?>" class="single_image-img attachment-full" alt="">
                            <div class="post-social-wrapper">
                        <div class="post-social">
                            <a title="Share this" href="#" class="facebook-share"><span>Share</span> <i class="fa fa-facebook"></i></a>
                            <a title="Tweet this" href="#" class="twitter-share"><span>Tweet</span> <i class="fa fa-twitter"></i></a>
                            <a title="Share with Google Plus" href="#" class="googleplus-share"><span>Share</span> <i class="fa fa-google-plus"></i></a>
                            <a title="Pin this" href="#" class="pinterest-share"><span>Pin it</span> <i class="fa fa-pinterest"></i></a>
                        </div>
                        <div class="clear"></div>
                        <span class="tags"> Keyword:&nbsp; <a rel="tag">jurnal</a> </span>

                        <div class="post-info">
                            <span><?= $dataSkripsi['date_update'] ?></span><span class="post-comments-count"></span>
                        </div>
                    </div>
                        </div>
                    </div>



                  

                    <div class="clear"></div>
            </article>
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