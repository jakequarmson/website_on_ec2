<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Document Title
	============================================= -->
	<title>Home - abc Finance</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo" style="width: 180px; height: 100px; padding-top: 20px">
					
		
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" style="">

						<ul>
							<li class="current" style="color:#C40000"><a href="#"><div>Home</div></a></li>

							<li><a href="#"><div>About Us</div></a></li>
							<li class="mega-menu"><a href="#"><div>Products & Services</div></a></li>
							<li class="mega-menu"><a href="#"><div>Our Clienteles</div></a></li>
							<li class="mega-menu"><a href="#"><div>Key Projects</div></a></li>
							<li><a href="#"><div>Team</div></a>
								
							</li>
							<li class="mega-menu"><a href="#"><div>Contact Us</div></a>
								
							</li>
						</ul>

						

						<!-- Top Search
						============================================= -->
					<!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<section id="slider" class="slider-parallax swiper_wrapper clearfix">

			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<div class="swiper-slide dark" style="  background:linear-gradient(0deg,rgba(0,0,0,0.50),rgba(0,0,0,0.50)),url('images/landing/img1.jpg');">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-center">
								<h2 data-caption-animate="fadeInUp" style='font-size:40px'>Welcome to ABC LImited </h2>
								<p data-caption-animate="fadeInUp" data-caption-delay="200">
									
									Investment Advisors, Management Consultants, Energy Consultants and Corporate Trainers
								</p>
							</div>
						</div>
					</div>

				</div>
				<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
				<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
				<div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>
			</div>

			<script>
				jQuery(document).ready(function($){
					var swiperSlider = new Swiper('.swiper-parent',{
						paginationClickable: false,
						slidesPerView: 1,
						grabCursor: true,
						onSwiperCreated: function(swiper){
							$('[data-caption-animate]').each(function(){
								var $toAnimateElement = $(this);
								var toAnimateDelay = $(this).attr('data-caption-delay');
								var toAnimateDelayTime = 0;
								if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
								if( !$toAnimateElement.hasClass('animated') ) {
									$toAnimateElement.addClass('not-animated');
									var elementAnimation = $toAnimateElement.attr('data-caption-animate');
									setTimeout(function() {
										$toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
									}, toAnimateDelayTime);
								}
							});
						},
						onSlideChangeStart: function(swiper){
							$('#slide-number-current').html(swiper.activeIndex + 1);
							$('[data-caption-animate]').each(function(){
								var $toAnimateElement = $(this);
								var elementAnimation = $toAnimateElement.attr('data-caption-animate');
								$toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
							});
						},
						onSlideChangeEnd: function(swiper){
							$('#slider .swiper-slide').each(function(){
								if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
							});
							$('#slider .swiper-slide:not(".swiper-slide-active")').each(function(){
								if($(this).find('video').length > 0) {
									if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
								}
							});
							if( $('#slider .swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider .swiper-slide.swiper-slide-active').find('video').get(0).play(); }

							$('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
								var $toAnimateElement = $(this);
								var toAnimateDelay = $(this).attr('data-caption-delay');
								var toAnimateDelayTime = 0;
								if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
								if( !$toAnimateElement.hasClass('animated') ) {
									$toAnimateElement.addClass('not-animated');
									var elementAnimation = $toAnimateElement.attr('data-caption-animate');
									setTimeout(function() {
										$toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
									}, toAnimateDelayTime);
								}
							});
						}
					});

					$('#slider-arrow-left').on('click', function(e){
						e.preventDefault();
						swiperSlider.swipePrev();
					});

					$('#slider-arrow-right').on('click', function(e){
						e.preventDefault();
						swiperSlider.swipeNext();
					});

					$('#slide-number-current').html(swiperSlider.activeIndex + 1);
					$('#slide-number-total').html(swiperSlider.slides.length);
				});
			</script>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="promo promo-light promo-full bottommargin-lg header-stick notopborder">
					<div class="container clearfix" align="center">
						<h3>Call us today at <span style="color:red">(+233) 003000 / 000817 8661</span> or Email us at <span>info@abcgh.com</span></h3>
						<span>OUR GOAL AS A COMPANY IS TO PROVIDE QUALITY SERVICES THAT IS AVAILABLE ON AN INTERNATIONAL STANDARD TO OUR CLIENTS WHILE SEEKING TO ESTABLISH A DURABLE PARTNERSHIP THAT WILL ENCOURAGE THE GREATER EXCHANGE OF OUR VALUES.</span>
						
					    </div>
				    </div>
                      	<div class="heading-block center">
						<h2>Is All About abc Finance & Investments Limited</h2>

					</div>
                   

					<div class="col_full bottommargin-lg common-height">

					<div class="col-md-3 dark col-padding ohidden" style="background-color: #1abc9c;">
						<div>
							<h3 class="uppercase" style="font-weight: 600;">Products & Services</h3>
							<p style="line-height: 1.8;">SPECIALIZED SERVICES ON OFFER TO ITS EXISTING AND NEW CLIENTS 
(i.e. Governments, World Bank and European Union and their Agencies, Private Corporates (both local and multi-national/international) including SMEs) and Public Sector Ministries, departments and Agencies
.</p>
							<a href="#" class="button button-border button-light button-rounded button-reveal tright uppercase nomargin">
								<i class="icon-angle-right"></i><span>Read More</span></a>
							<i class="icon-bulb bgicon"></i>
						</div>
					</div>

					<div class="col-md-3 dark col-padding ohidden" style="background-color: #34495e;">
						<div>
							<h3 class="uppercase" style="font-weight: 600;">Our Clientele</h3>
							<p style="line-height: 1.8;">
								The Company has provided project finance, finance & investment, project appraisal, monitoring & evaluation, environmental, trade and general management advisory and general consultancy services for clients in the following categories
							</p>
							<a href="#" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>
							<i class="icon-cog bgicon"></i>
						</div>
					</div>

					<div class="col-md-3 dark col-padding ohidden" style="background-color: #e74c3c;">
						<div>
							<h3 class="uppercase" style="font-weight: 600;">COMPLETED ASSIGNMENTS</h3>
							<p style="line-height: 1.8;">
								
								The following are key completed assignments by abc working with its associated partners
							</p>
							<a href="#" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>
							<i class="icon-thumbs-up bgicon"></i>
						</div>
					</div>

					<div class="col-md-3 dark col-padding ohidden" style="background-color: #34495e;">
						<div>
							<h3 class="uppercase" style="font-weight: 600;">OUR TEAM OF EXPERTS</h3>
							<p style="line-height: 1.8;">Our team of expertise is a well welded blend of the tailored requisite professional expertise made up of the following  TEAM OF EXPERTS.</p>
							<a href="#" class="button button-border button-light button-rounded uppercase nomargin">Read More</a>
							<i class="icon-thumbs-up bgicon"></i>
						</div>
					</div>

					<div class="clear"></div>

				</div>
				<div class="heading-block center">
						<h2>Our Associated Companies </h2>

					</div>

				<div class="pricing bottommargin clearfix" style="padding-left:10%; padding-right: 10%">

						<div class="col-md-3">

							<div class="pricing-box">
								<div class="pricing-title">
									<h3>INTERNATIONAL MANAGEMENT</h3>
									<span>CONSULTANTS</span>
								</div>
								
								<div class="pricing-features">
									<ul>
										<li><strong>ENK Consultancy, UK</strong></li>
										
										<li><strong>Location</strong> UK</li>
										
									</ul>
								</div>
								<div class="pricing-action">
									<a href="#" class="btn btn-danger btn-block btn-lg">Read more</a>
								</div>
							</div>

						</div>

						<div class="col-md-3">

							<div class="pricing-box best-price">
								<div class="pricing-title">
									<h3>LEGAL AND NOTARY  </h3>
									<span>CONSULTANTS</span>
								</div>
								
								<div class="pricing-features">
									<ul>George Ankoma-Mensah,
										<li><strong>George Ankoma-Mensah</strong>  & Associates</li>
										
										<li><strong>Location</strong>  Accra-Ghana </li>
										
										
									</ul>
								</div>
								<div class="pricing-action">
									<a href="#" class="btn btn-danger btn-block btn-lg bgcolor border-color">Read more</a>
								</div>
							</div>

						</div>

						<div class="col-md-3">

							<div class="pricing-box">
								<div class="pricing-title">
									<h3>MANAGEMENT ACCOUNTANTS</h3>
									<span>AND AUDITORS </span>
								</div>
								
								<div class="pricing-features">
									<ul>
										<li><strong>BLA & Associates</strong></li>
										
										<li><strong>Location</strong> Accra-Ghana</li>
										
									</ul>
								</div>
								<div class="pricing-action">
									<a href="#" class="btn btn-danger btn-block btn-lg">Read more</a>
								</div>
							</div>

						</div>

				
						<div class="col-md-3">

							<div class="pricing-box best-price">
								<div class="pricing-title">
									<h3>HUMAN CAPITAL TRAINING &   </h3>
									<span>DEVELOPMENT CONSULTANTS</span>
								</div>
								
								
								<div class="pricing-features">
									<ul>
										<li><strong>George Ankoma-Mensah</strong>  - Achievers Consult</li>
										
										<li><strong>Location</strong>  Accra-Ghana </li>
										
										
									</ul>
								</div>
								<div class="pricing-action">
									<a href="#" class="btn btn-danger btn-block btn-lg bgcolor border-color">Read more</a>
								</div>
							</div>

						</div>

						</div>

				
				<div class="container clearfix">

					<div class="heading-block center">
						<h3>Some of our <span>Featured</span> Works</h3>
						<span>We have worked on some Awesome Projects that are worth boasting of.</span>
					</div>

					<div id="oc-portfolio" class="owl-carousel portfolio-carousel portfolio-nomargin">

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/landing/finance.jpg" alt="Open Imagination" width="400" height="200">
									</a>
									<div class="portfolio-overlay">
										<a href="images/portfolio/full/1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Finance & Manamgement Advisory</a></h3>
									
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/landing/project.jpg" height="300" alt="Locked Steel Gate">
									</a>
									<div class="portfolio-overlay">
										<a href="images/portfolio/full/2.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Project Management, Monitoring and Evaluation</a></h3>
									
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/landing/energy.jpg" alt="Mac Sunglasses">
									</a>
									<div class="portfolio-overlay">
										<a href="#" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
										<a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Public-Private-Partnership (PPP) Projects </a></h3>
									
								</div>
							</div>
						</div>

						<div class="oc-item">
							<div class="iportfolio">
								<div class="portfolio-image">
									<a href="#">
										<img src="images/landing/energy1.jpg" alt="Console Activity">
									</a>
									<div class="portfolio-overlay">
										<a href="images/landing/energy1.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
										<a href="#l" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Energy Advisory</a></h3>
									
								</div>
							</div>
						</div>

						</div>

					

					</div>

					<script type="text/javascript">

						jQuery(document).ready(function($) {

							var ocPortfolio = $("#oc-portfolio");

							ocPortfolio.owlCarousel({
								margin: 1,
								autoplay: true,
								autoplayHoverPause: true,
								dots: false,
								nav: true,
								navText : ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
								responsive:{
									0:{ items:1 },
									600:{ items:2 },
									1000:{ items:3 },
									1200:{ items:4 }
								}
							});

						});

					</script>

				</div>

			
			

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2017 All Rights Reserved abc Finance<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@abcgh.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> (+233) 30 277 0666 / 20 817 8661 <span class="middot">&middot;</span> 
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>