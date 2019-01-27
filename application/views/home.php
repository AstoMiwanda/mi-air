<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Travello</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Travello template project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http_equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http_equiv="Pragma" content="no-cache" />
	<meta http_equiv="Expires" content="0" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/travello/styles/bootstrap4/bootstrap.min.css">
	<link href="<?=base_url()?>assets/travello/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/travello/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/travello/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/travello/plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/travello/styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/travello/styles/responsive.css">
</head>

<body>

	<div class="super_container">

		<!-- Header -->

		<header class="header">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
								<div class="logo"><a href="<?=base_url()?>Home">Travello</a></div>
								<nav class="main_nav">
									<ul class="d-flex flex-row align-items-start justify-content-start">
										<li class="active"><a href="<?=base_url()?>Home">Beranda</a></li>
										<li><a href="<?=base_url()?>About">Tentang</a></li>
										<li><a href="#">Layanan</a></li>
										<li><a href="news.html">News</a></li>
										<li><a href="<?=base_url()?>Kontak">Kontak</a></li>
									</ul>
								</nav>
								<div class="header_phone ml-auto">0813-9114-6284</div>

								<!-- Hamburger -->

								<div class="hamburger ml-auto">
									<i class="fa fa-bars" aria-hidden="true"></i>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header_social d-flex flex-row align-items-center justify-content-start">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</header>

		<!-- Menu -->

		<div class="menu">
			<div class="menu_header d-flex flex-row align-items-center justify-content-start">
				<div class="menu_logo"><a href="index.html">Travello</a></div>
				<div class="menu_close_container ml-auto">
					<div class="menu_close">
						<div></div>
						<div></div>
					</div>
				</div>
			</div>
			<div class="menu_content">
				<ul>
					<li><a href="<?=base_url()?>Home">Beranda</a></li>
					<li><a href="<?=base_url()?>About">Tentang</a></li>
					<li><a href="#">Layananan</a></li>
					<li><a href="news.html">News</a></li>
					<li><a href="<?=base_url()?>Kontak">Kontak</a></li>
				</ul>
			</div>
			<div class="menu_social">
				<div class="menu_phone ml-auto">0813-9114-6284</div>
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>

		<!-- Home -->

		<div class="home">

			<!-- Home Slider -->
			<div class="home_slider_container">
				<div class="owl-carousel owl-theme home_slider">

					<!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url('<?=base_url()?>/assets/images/home_slider.jpg')"></div>
						<div class="home_slider_content_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_slider_content">
											<div class="home_title">
												<h2>Mari Keliling Nusantara</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url('<?=base_url()?>/assets/images/home_slider.jpg')"></div>
						<div class="home_slider_content_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_slider_content">
											<div class="home_title">
												<h2>Menikmati Liburan</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="owl-item">
						<div class="background_image" style="background-image:url('<?=base_url()?>/assets/images/home_slider.jpg')"></div>
						<div class="home_slider_content_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_slider_content">
											<div class="home_title">
												<h2>Berlibur bersama kami</h2>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="home_page_nav">
					<ul class="d-flex flex-column align-items-end justify-content-end">
						<li><a href="#" data-scroll-to="#destinations">Popular<span>01</span></a></li>
						<li><a href="#" data-scroll-to="#testimonials">Kata Mereka<span>02</span></a></li>
						<li><a href="#" data-scroll-to="#news">Event<span>03</span></a></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Search -->

		<div class="home_search">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_search_container">
							<div class="home_search_title">Cari untuk perjalanan anda</div>
							<div class="home_search_content">
								<form action="#" class="home_search_form" id="home_search_form">
									<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
										<input type="text" class="search_input search_input_1" placeholder="Kota" required="required">
										<input type="text" class="search_input search_input_2" placeholder="Keberangkatan" required="required">
										<input type="text" class="search_input search_input_3" placeholder="Tujuan" required="required">
										<input type="text" class="search_input search_input_4" placeholder="Harga" required="required">
										<button class="home_search_button">Cari</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Intro -->

		<div class="intro">
			<div class="intro_background" style="background-image:url('<?=base_url()?>/assets/images/intro.png')"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="intro_container">
							<div class="row">

								<!-- Intro Item -->
								<div class="col-lg-4 intro_col">
									<div class="intro_item d-flex flex-row align-items-end justify-content-start">
										<div class="intro_icon"><img src="<?=base_url()?>assets/images/beach.svg" alt=""></div>
										<div class="intro_content">
											<div class="intro_title">Top Destinations</div>
											<div class="intro_subtitle">
												<p>Berlibur menuju tempat-tempat menarik.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- Intro Item -->
								<div class="col-lg-4 intro_col">
									<div class="intro_item d-flex flex-row align-items-end justify-content-start">
										<div class="intro_icon"><img src="<?=base_url()?>assets/images/wallet.svg" alt=""></div>
										<div class="intro_content">
											<div class="intro_title">Harga Terjangkau</div>
											<div class="intro_subtitle">
												<p>Liburan dengan harga yang bersahabat.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- Intro Item -->
								<div class="col-lg-4 intro_col">
									<div class="intro_item d-flex flex-row align-items-end justify-content-start">
										<div class="intro_icon"><img src="<?=base_url()?>assets/images/suitcase.svg" alt=""></div>
										<div class="intro_content">
											<div class="intro_title">Pelayanan Menyenangkan</div>
											<div class="intro_subtitle">
												<p>Kami berusaha melayani anda dengan nyaman.</p>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Destinations -->

		<div class="destinations" id="destinations">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="section_subtitle">Bingung mau berlibur kemana?</div>
						<div class="section_title">
							<h2>Tempat Liburan Popular</h2>
						</div>
					</div>
				</div>
				<div class="row destinations_row">
					<div class="col">
						<div class="destinations_container item_grid">

							<!-- Destination -->
							<div class="destination item">
								<div class="destination_image">
									<img src="<?=base_url()?>assets/images/destination_1.jpg" alt="">
									<div class="spec_offer text-center"><a href="#">Special Offer</a></div>
								</div>
								<div class="destination_content">
									<div class="destination_title"><a href="destinations.html">Bali</a></div>
									<div class="destination_subtitle">
										<p>Nulla pretium tincidunt felis, nec.</p>
									</div>
									<div class="destination_price">From $679</div>
								</div>
							</div>

							<!-- Destination -->
							<div class="destination item">
								<div class="destination_image">
									<img src="<?=base_url()?>assets/images/destination_2.jpg" alt="">
								</div>
								<div class="destination_content">
									<div class="destination_title"><a href="destinations.html">Indonesia</a></div>
									<div class="destination_subtitle">
										<p>Nulla pretium tincidunt felis, nec.</p>
									</div>
									<div class="destination_price">From $679</div>
								</div>
							</div>

							<!-- Destination -->
							<div class="destination item">
								<div class="destination_image">
									<img src="<?=base_url()?>assets/images/destination_3.jpg" alt="">
								</div>
								<div class="destination_content">
									<div class="destination_title"><a href="destinations.html">San Francisco</a></div>
									<div class="destination_subtitle">
										<p>Nulla pretium tincidunt felis, nec.</p>
									</div>
									<div class="destination_price">From $679</div>
								</div>
							</div>

							<!-- Destination -->
							<div class="destination item">
								<div class="destination_image">
									<img src="<?=base_url()?>assets/images/destination_4.jpg" alt="">
								</div>
								<div class="destination_content">
									<div class="destination_title"><a href="destinations.html">Paris</a></div>
									<div class="destination_subtitle">
										<p>Nulla pretium tincidunt felis, nec.</p>
									</div>
									<div class="destination_price">From $679</div>
								</div>
							</div>

							<!-- Destination -->
							<div class="destination item">
								<div class="destination_image">
									<img src="<?=base_url()?>assets/images/destination_5.jpg" alt="">
								</div>
								<div class="destination_content">
									<div class="destination_title"><a href="destinations.html">Phi Phi Island</a></div>
									<div class="destination_subtitle">
										<p>Nulla pretium tincidunt felis, nec.</p>
									</div>
									<div class="destination_price">From $679</div>
								</div>
							</div>

							<!-- Destination -->
							<div class="destination item">
								<div class="destination_image">
									<img src="<?=base_url()?>assets/images/destination_6.jpg" alt="">
								</div>
								<div class="destination_content">
									<div class="destination_title"><a href="destinations.html">Mykonos</a></div>
									<div class="destination_subtitle">
										<p>Nulla pretium tincidunt felis, nec.</p>
									</div>
									<div class="destination_price">From $679</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Testimonials -->

		<div class="testimonials" id="testimonials">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?=base_url()?>assets/images/testimonials.jpg"
			 data-speed="0.8"></div>
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="section_subtitle">Masih belum yakin untuk liburan?</div>
						<div class="section_title">
							<h2>Kata Mereka</h2>
						</div>
					</div>
				</div>
				<div class="row testimonials_row">
					<div class="col">

						<!-- Testimonials Slider -->
						<div class="testimonials_slider_container">
							<div class="owl-carousel owl-theme testimonials_slider">

								<!-- Slide -->
								<div class="owl-item text-center">
									<div class="testimonial">Gile bang keren bang, tempat wisatanya keren, dapat memcuci otak dari kepenatan tugas kerja, dan dapat membuat pikiran ku segar kembali.</div>
									<div class="testimonial_author">
										<div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
											<div>john turner,</div>
											<div>client</div>
										</div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item text-center">
									<div class="testimonial">Segar sekali tempat wisatanya. Masih asri alamnya, hijau semua, bikin mata kembali segar.</div>
									<div class="testimonial_author">
										<div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
											<div>Bradl,</div>
											<div>client</div>
										</div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item text-center">
									<div class="testimonial">Nyaman banget pelayanan nya, ngga nyangka dengan kenyaman seperti itu tidak terlalu menguras isi dompet ku.</div>
									<div class="testimonial_author">
										<div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
											<div>Jono,</div>
											<div>client</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="test_nav">
				<ul class="d-flex flex-column align-items-end justify-content-end">
					<li><a href="#">City Breaks Clients<span>01</span></a></li>
					<li><a href="#">Cruises Clients<span>02</span></a></li>
					<li><a href="#">All Inclusive Clients<span>03</span></a></li>
				</ul>
			</div> -->
		</div>

		<!-- News -->

		<div class="news" id="news">
			<div class="container">
				<div class="row">
					<div class="col-xl-8">
						<div class="news_container">

							<!-- News Post -->
							<div class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
								<div class="news_post_image"><img src="<?=base_url()?>assets/images/news_1.jpg" alt=""></div>
								<div class="news_post_content">
									<div class="news_post_date d-flex flex-row align-items-end justify-content-start">
										<div>02</div>
										<div>june</div>
									</div>
									<div class="news_post_title"><a href="#">Best tips to travel light</a></div>
									<div class="news_post_category">
										<ul>
											<li><a href="#">lifestyle & travel</a></li>
										</ul>
									</div>
									<div class="news_post_text">
										<p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa
											et laoreet.</p>
									</div>
								</div>
							</div>

							<!-- News Post -->
							<div class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
								<div class="news_post_image"><img src="<?=base_url()?>assets/images/news_2.jpg" alt=""></div>
								<div class="news_post_content">
									<div class="news_post_date d-flex flex-row align-items-end justify-content-start">
										<div>01</div>
										<div>june</div>
									</div>
									<div class="news_post_title"><a href="#">Best tips to travel light</a></div>
									<div class="news_post_category">
										<ul>
											<li><a href="#">lifestyle & travel</a></li>
										</ul>
									</div>
									<div class="news_post_text">
										<p>Tempor massa et laoreet malesuada. Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique
											at leo.</p>
									</div>
								</div>
							</div>

							<!-- News Post -->
							<div class="news_post d-flex flex-md-row flex-column align-items-start justify-content-start">
								<div class="news_post_image"><img src="<?=base_url()?>assets/images/news_3.jpg" alt=""></div>
								<div class="news_post_content">
									<div class="news_post_date d-flex flex-row align-items-end justify-content-start">
										<div>29</div>
										<div>may</div>
									</div>
									<div class="news_post_title"><a href="#">Best tips to travel light</a></div>
									<div class="news_post_category">
										<ul>
											<li><a href="#">lifestyle & travel</a></li>
										</ul>
									</div>
									<div class="news_post_text">
										<p>Vivamus massa.Tempor massa et laoreet malesuada. Aliquam nulla nisl, accumsan sit amet mattis.</p>
									</div>
								</div>
							</div>

						</div>
					</div>

					<!-- News Sidebar -->
					<div class="col-xl-4" style="display: none">
						<div class="travello">
							<div class="background_image" style="background-image:url('<?=base_url()?>/assets/images/travello.jpg')"></div>
							<div class="travello_content">
								<div class="travello_content_inner">
									<div></div>
									<div></div>
								</div>
							</div>
							<div class="travello_container">
								<a href="#">
									<div class="d-flex flex-column align-items-center justify-content-end">
										<span class="travello_title">Get a 20% Discount</span>
										<span class="travello_subtitle">Buy Your Vacation Online Now</span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->

		<footer class="footer">
			<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?=base_url()?>assets/images/footer_1.jpg"
			 data-speed="0.8"></div>
			<div class="container">
				<div class="row" style="display: none">
					<div class="col">
						<div class="newsletter">
							<div class="newsletter_title_container text-center">
								<div class="newsletter_title">Subscribe to our newsletter to get the latest trends & news</div>
								<div class="newsletter_subtitle">Join our database NOW!</div>
							</div>
							<div class="newsletter_form_container">
								<form action="#" class="newsletter_form d-flex flex-md-row flex-column align-items-start justify-content-between"
								 id="newsletter_form">
									<div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
										<div><input type="text" class="newsletter_input newsletter_input_name" id="newsletter_input_name" placeholder="Name"
											 required="required">
											<div class="input_border"></div>
										</div>
										<div><input type="email" class="newsletter_input newsletter_input_email" id="newsletter_input_email"
											 placeholder="Your e-mail" required="required">
											<div class="input_border"></div>
										</div>
									</div>
									<div><button class="newsletter_button">subscribe</button></div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row footer_contact_row">
					<div class="col-xl-10 offset-xl-1">
						<div class="row">

							<!-- Footer Contact Item -->
							<div class="col-xl-4 footer_contact_col">
								<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
									<div class="footer_contact_icon"><img src="<?=base_url()?>assets/images/sign.svg" alt=""></div>
									<div class="footer_contact_title">Hubungi Kami</div>
									<div class="footer_contact_list">
										<ul>
											<li>Office Landline: +62 813 9114 6284</li>
											<li>Mobile: +62 813 5555 7272</li>
										</ul>
									</div>
								</div>
							</div>

							<!-- Footer Contact Item -->
							<div class="col-xl-4 footer_contact_col">
								<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
									<div class="footer_contact_icon"><img src="<?=base_url()?>assets/images/trekking.svg" alt=""></div>
									<div class="footer_contact_title">come & drop by</div>
									<div class="footer_contact_list">
										<ul style="max-width:190px">
											<li>4124 Barnes Street, Sanford, FL 32771</li>
										</ul>
									</div>
								</div>
							</div>

							<!-- Footer Contact Item -->
							<div class="col-xl-4 footer_contact_col">
								<div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
									<div class="footer_contact_icon"><img src="<?=base_url()?>assets/images/around.svg" alt=""></div>
									<div class="footer_contact_title">Tinggalkan Pesan</div>
									<div class="footer_contact_list">
										<ul>
											<li>astoarianto@gmail.com</li>
											<li>astocreation@officialac.com</li>
										</ul>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<script src="<?=base_url()?>assets/travello/js/jquery-3.2.1.min.js"></script>
	<script src="<?=base_url()?>assets/travello/styles/bootstrap4/popper.js"></script>
	<script src="<?=base_url()?>assets/travello/styles/bootstrap4/bootstrap.min.js"></script>
	<script src="<?=base_url()?>assets/travello/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="<?=base_url()?>assets/travello/plugins/Isotope/isotope.pkgd.min.js"></script>
	<script src="<?=base_url()?>assets/travello/plugins/scrollTo/jquery.scrollTo.min.js"></script>
	<script src="<?=base_url()?>assets/travello/plugins/easing/easing.js"></script>
	<script src="<?=base_url()?>assets/travello/plugins/parallax-js-master/parallax.min.js"></script>
	<script src="<?=base_url()?>assets/travello/js/custom.js"></script>
</body>

</html>
