	<!--/footer-bottom-->
    <!-- <div class="contact-w3ls" id="contact">
			

		</div> -->
		<div class="w3agile_footer_copy">
			<p>© 2025 Movies Pro. All rights reserved | Design by <a href="https://w3layouts.com/">Aptech Group</a></p>
		</div>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;">
			</span></a>

		<script src="js/jquery-1.11.1.min.js"></script>
		<!-- Dropdown-Menu-JavaScript -->
		<script>
			$(document).ready(function () {
				$(".dropdown").hover(
					function () {
						$('.dropdown-menu', this).stop(true, true).slideDown("fast");
						$(this).toggleClass('open');
					},
					function () {
						$('.dropdown-menu', this).stop(true, true).slideUp("fast");
						$(this).toggleClass('open');
					}
				);
			});
		</script>
		<!-- //Dropdown-Menu-JavaScript -->


		<script type="text/javascript" src="js/jquery.zoomslider.min.js"></script>
		<!-- search-jQuery -->
		<script src="js/main.js"></script>
		<script src="js/simplePlayer.js"></script>
		<script>
			$("document").ready(function () {
				$("#video").simplePlayer();
			});
		</script>
		<script>
			$("document").ready(function () {
				$("#video1").simplePlayer();
			});
		</script>
		<script>
			$("document").ready(function () {
				$("#video2").simplePlayer();
			});
		</script>
		<script>
			$("document").ready(function () {
				$("#video3").simplePlayer();
			});
		</script>

		<!-- pop-up-box -->
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		<!--//pop-up-box -->

		<div id="small-dialog1" class="mfp-hide">
			<iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
		</div>
		<div id="small-dialog2" class="mfp-hide">
			<iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
		</div>
		<script>
			$(document).ready(function () {
				$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
				});

			});
		</script>
		<script src="js/easy-responsive-tabs.js"></script>
		<script>
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true,   // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					activate: function (event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#tabInfo');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});
				$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
				});
			});
		</script>
		<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/owl.carousel.js"></script>
		<script>
			$(document).ready(function () {
				$("#owl-demo").owlCarousel({

					autoPlay: 3000, //Set AutoPlay to 3 seconds
					autoPlay: true,
					navigation: true,

					items: 5,
					itemsDesktop: [640, 4],
					itemsDesktopSmall: [414, 3]

				});

			}); 
		</script>

		<!--/script-->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>

		<script type="text/javascript">
			jQuery(document).ready(function ($) {
				$(".scroll").click(function (event) {
					event.preventDefault();
					$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 900);
				});
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function () {
				/*
				var defaults = {
						containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
					};
				*/

				$().UItoTop({ easingType: 'easeOutQuart' });

			});
		</script>
		<!--end-smooth-scrolling-->
		<script src="js/bootstrap.js"></script>




		<script>(function () { function c() { var b = a.contentDocument || a.contentWindow.document; if (b) { var d = b.createElement('script'); d.innerHTML = "window.__CF$cv$params={r:'8f4d1dc1499fa12c',t:'MTczNDY3MTMyNS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);"; b.getElementsByTagName('head')[0].appendChild(d) } } if (document.body) { var a = document.createElement('iframe'); a.height = 1; a.width = 1; a.style.position = 'absolute'; a.style.top = 0; a.style.left = 0; a.style.border = 'none'; a.style.visibility = 'hidden'; document.body.appendChild(a); if ('loading' !== document.readyState) c(); else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c); else { var e = document.onreadystatechange || function () { }; document.onreadystatechange = function (b) { e(b); 'loading' !== document.readyState && (document.onreadystatechange = e, c()) } } } })();</script>
		</body>

		</html>