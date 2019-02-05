<!DOCTYPE html>
<html lang="en">
<head>
<title>Travello | Tentang</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travello template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/travello/styles/bootstrap4/bootstrap.min.css">
<link href="<?=base_url()?>assets/travello/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/travello/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/travello/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/travello/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/travello/styles/about.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/travello/styles/about_responsive.css">
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
                                    <li><a href="<?=base_url()?>Home">Beranda</a></li>
                                    <li class="active"><a href="<?=base_url()?>About">Tentang</a></li>
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
		<div class="background_image" style="background-image:url(<?=base_url()?>assets/travello/images/about.jpg)"></div>
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

	<!-- About -->

	<div class="about" style="padding-bottom: 115px">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_subtitle">Mau mengenal lebih tentang kami?</div>
					<div class="section_title"><h2>Beberapa kata tentang kami</h2></div>
				</div>
			</div>
			<div class="row about_row">
				<div class="col-lg-6">
					<div class="about_content">
						<div class="text_highlight">Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet .Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
						<div class="about_text">
							<p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.Tempor massa et laoreet .Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu laoreet ante, sollicitudin volutpat quam. Vestibulum posuere malesuada ultrices. In pulvinar rhoncus lacus at aliquet. Nunc vitae lacus varius, auctor nisi sit amet, consectetur mauris. Curabitur sodales semper est, vel faucibus urna laoreet vel. Ut justo diam, sodales non pulvinar at, vulputate quis neque. Etiam aliquam purus vel ultricies consequat.</p>
						</div>
						<div class="button about_button" style="display: none;"><a href="#">read more</a></div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about_image"><img src="<?=base_url()?>assets/travello/images/about_1.jpg" alt=""></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Milestones -->

	<div class="milestones" style="display: none">
		<div class="container">
			<div class="row">
				
				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="<?=base_url()?>assets/travello/images/mountain.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="17">0</div>
						<div class="milestone_text">Online Courses</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="<?=base_url()?>assets/travello/images/island.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="213">0</div>
						<div class="milestone_text">Students</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="<?=base_url()?>assets/travello/images/camera.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="11923">0</div>
						<div class="milestone_text">Teachers</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="<?=base_url()?>assets/travello/images/boat.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="15">0</div>
						<div class="milestone_text">Countries</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Why Choose Us -->

	<div class="why">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?=base_url()?>assets/travello/images/why.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_subtitle">Masih ragu untuk berlibur?</div>
					<div class="section_title"><h2>Alasan kenapa pilih kami</h2></div>
				</div>
			</div>
			<div class="row why_row">
				
				<!-- Why item -->
				<div class="col-lg-4 why_col">
					<div class="why_item">
						<div class="why_image">
							<img src="<?=base_url()?>assets/travello/images/why_1.jpg" alt="">
							<div class="why_icon d-flex flex-column align-items-center justify-content-center">
								<img src="<?=base_url()?>assets/travello/images/why_1.svg" alt="">
							</div>
						</div>
						<div class="why_content text-center">
							<div class="why_title">Pelayanan Cepat</div>
							<div class="why_text">
								<p>Kami memberikan anda sebuah pelayanan yang cepat dan nyaman.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Why item -->
				<div class="col-lg-4 why_col">
					<div class="why_item">
						<div class="why_image">
							<img src="<?=base_url()?>assets/travello/images/why_2.jpg" alt="">
							<div class="why_icon d-flex flex-column align-items-center justify-content-center">
								<img src="<?=base_url()?>assets/travello/images/why_2.svg" alt="">
							</div>
						</div>
						<div class="why_content text-center">
							<div class="why_title">Great Team</div>
							<div class="why_text">
								<p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Why item -->
				<div class="col-lg-4 why_col">
					<div class="why_item">
						<div class="why_image">
							<img src="<?=base_url()?>assets/travello/images/why_3.jpg" alt="">
							<div class="why_icon d-flex flex-column align-items-center justify-content-center">
								<img src="<?=base_url()?>assets/travello/images/why_3.svg" alt="">
							</div>
						</div>
						<div class="why_content text-center">
							<div class="why_title">Harga Terjangkau</div>
							<div class="why_text">
								<p>Kami meberikan perjalanan menuju tempat wisata dengan aman dan harga bersahabat.</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Team -->

	<div class="team" style="display: none">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_subtitle">simply amazing places</div>
					<div class="section_title"><h2>Meet the Team</h2></div>
				</div>
			</div>
			<div class="row team_row">
				
				<!-- Team Item -->
				<div class="col-xl-3 col-md-6 team_col">
					<div class="team_item d-flex flex-column align-items-center justify-content-start text-center">
						<div class="team_image"><img src="<?=base_url()?>assets/travello/images/team_1.jpg" alt=""></div>
						<div class="team_content">
							<div class="team_title"><a href="#">Margaret Smith</a></div>
							<div class="team_text">
								<p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-xl-3 col-md-6 team_col">
					<div class="team_item d-flex flex-column align-items-center justify-content-start text-center">
						<div class="team_image"><img src="<?=base_url()?>assets/travello/images/team_2.jpg" alt=""></div>
						<div class="team_content">
							<div class="team_title"><a href="#">James Williams</a></div>
							<div class="team_text">
								<p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-xl-3 col-md-6 team_col">
					<div class="team_item d-flex flex-column align-items-center justify-content-start text-center">
						<div class="team_image"><img src="<?=base_url()?>assets/travello/images/team_3.jpg" alt=""></div>
						<div class="team_content">
							<div class="team_title"><a href="#">Michael James</a></div>
							<div class="team_text">
								<p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-xl-3 col-md-6 team_col">
					<div class="team_item d-flex flex-column align-items-center justify-content-start text-center">
						<div class="team_image"><img src="<?=base_url()?>assets/travello/images/team_4.jpg" alt=""></div>
						<div class="team_content">
							<div class="team_title"><a href="#">Noah Smith</a></div>
							<div class="team_text">
								<p>Pellentesque sit amet elementum ccumsan sit amet mattis eget, tristique at leo. Vivamus massa.</p>
							</div>
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
<script src="<?=base_url()?>assets/travello/plugins/greensock/TweenMax.min.js"></script>
<script src="<?=base_url()?>assets/travello/plugins/greensock/TimelineMax.min.js"></script>
<script src="<?=base_url()?>assets/travello/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?=base_url()?>assets/travello/plugins/greensock/animation.gsap.min.js"></script>
<script src="<?=base_url()?>assets/travello/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?=base_url()?>assets/travello/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?=base_url()?>assets/travello/plugins/easing/easing.js"></script>
<script src="<?=base_url()?>assets/travello/plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?=base_url()?>assets/travello/js/about.js"></script>
</body>
</html>