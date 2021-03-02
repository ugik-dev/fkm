<div class="ub-footer home-row">
	<div class="container">
		<div class="row">
			<!-- <div class="col-lg-12 col-md-4 col-xs-8">

				<div>
					<strong>Copyright</strong> ugik.dev@gmail.com | +62 812 7974 8967 © 2020
				</div>
			</div> -->
			<div class="col-lg-4 col-md-4 col-xs-8">
				<div class="logo-footer"> <img width="auto" height="90px" data-src="<?= base_url() ?>assets/img/fkm_logo.png" class="lazyload" src="<?= base_url() ?>assets/img/logo-unsri.png" />
					<noscript>
						<img src="<?= base_url() ?>assets/img/logo-unsri.png" width="100%" /></noscript></div>
			</div>
			<div class="col col-lg-6 col-md-8 col-xs-12">
				<div class="pull-right">
					<div class="foot-frame">
						<div class="foot-link clearfix">
							<div class="menu-footnav-container">
								<ul id="menu-footnav" class="menu">
									<!-- <li id="menu-item-530" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-530"><a href="https://unsri.ac.id/id/term-of-use/">Aturan Penggunaan</a></li>
									<li id="menu-item-688" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-688"><a href="https://unsri.ac.id/id/copy-rights/">Hak Cipta</a></li>
									<li id="menu-item-606" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-606"><a href="https://unsri.ac.id/id/sitemap/">Sitemap</a></li>
									<li id="menu-item-533" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-533"><a href="https://prasetya.unsri.ac.id/rss.xml?lang=en">RSS</a></li>
									<li id="menu-item-1460" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1460"><a href="http://ppid.unsri.ac.id">PPID</a></li>
									<li id="menu-item-1225" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1225"><a href="https://unsri.ac.id/id/copyright/contact/">Contact</a></li> -->
								</ul>
							</div>
						</div>
						<div class="foot-media  clearfix">
							<div class="menu-socnav-container">
								<ul id="menu-socnav" class="menu">
									<li id="menu-item-535" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-535"><a target="_blank" rel="noopener noreferrer" href="https://id-id.facebook.com/fkm.unsri"><i class="fa fa-facebook"></i></a></li>
									<li id="menu-item-536" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-536"><a target="_blank" rel="noopener noreferrer" href="https://twitter.com/fkmunsri"><i class="fa fa-twitter"></i></a></li>
									<li id="menu-item-537" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-537"><a target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/channel/UC2FccwVoAV3jH-WFPafov_g"><i class="fa fa-youtube-play"></i></a></li>
									<!-- <li id="menu-item-689" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-689"><a target="_blank" rel="noopener noreferrer" href="https://www.flickr.com/photos/ub_pictures/"><i class="fa fa-flickr"></i></a></li> -->
									<!-- <li id="menu-item-539" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-539"><a target="_blank" rel="noopener noreferrer" href="https://prasetya.unsri.ac.id/rss.xml?lang=id"><i class="fa fa-rss"></i></a></li> -->
									<li id="menu-item-1226" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1226"><a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/bemkmfkmunsri/"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function() {
			$('body').scrollspy({
				target: '#navbar',
				offset: 80
			});

			// Page scrolling feature
			$('a.page-scroll').bind('click', function(event) {
				var link = $(this);
				$('html, body').stop().animate({
					scrollTop: $(link.attr('href')).offset().top - 50
				}, 500);
				event.preventDefault();
				$("#navbar").collapse('hide');
			});
		});

		function initNavbar(changeOn) {
			cbpAnimatedHeader = (function() {
				var docElem = document.documentElement,
					header = document.querySelector('.navbar-default'),
					didScroll = false,
					changeHeaderOn = changeOn;

				function init() {
					window.addEventListener('scroll', function(event) {
						if (!didScroll) {
							didScroll = true;
							setTimeout(scrollPage, 250);
						}
					}, false);
				}

				function scrollPage() {
					var sy = scrollY();
					if (sy >= changeHeaderOn) {
						$(header).addClass('navbar-scroll')
					} else {
						$(header).removeClass('navbar-scroll')
					}
					didScroll = false;
				}
				if (changeOn == 0) {
					scrollPage();
				}

				function scrollY() {
					return window.pageYOffset || docElem.scrollTop;
				}
				init();
			})();
			new WOW().init();
		}
	</script>

	<script type='text/javascript'>

	</script>
	<!-- jquery-custom1 -->
	<script type='text/javascript' src='<?= base_url() ?>assets/js/jquery-custom1.js'></script>
	<!-- <script type='text/javascript' src='<?= base_url() ?>assets/js/jquery-custom1.js'></script> -->
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
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider-min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/mobile-detect/1.4.4/mobile-detect.min.js"></script>
	<script>
		var htmlString = 'ZpNZGxz7brs';
		var htmlString = 'wm9KN2GYHmU';
	</script>
	<script defer src="https://ub.ac.id/wp-content/cache/autoptimize/js/autoptimize_055e675c6ff2218a683658f9138de432.js"></script>
	</body>

	</html>