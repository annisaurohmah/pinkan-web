<!doctype html>
	<html class="no-js" lang="zxx">

	<head>
		<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Title -->
		<title>PINKAN - Pintar Belajar dengan Interaksi Permainan</title>

		<!-- Favicon -->
		<link rel="icon" href=" {{ asset('img/logo.svg') }}">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
		<!-- icofont CSS -->
		<link rel="stylesheet" href="{{ asset('css/icofont.css') }}">
		<!-- Slicknav -->
		<link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}">
		<!-- Owl Carousel CSS -->
		<link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="{{ asset('css/datepicker.css') }}">
		<!-- Animate CSS -->
		<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
		<!-- Magnific Popup CSS -->
		<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

		<!-- Medipro CSS -->
		<link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">


	</head>

	<body>

		<!-- Preloader -->
		<div class="preloader">
			<div class="loader">
				<div class="loader-outter"></div>
				<div class="loader-inner"></div>

				<div class="indicator">
					<img src="img/logo.svg" width="25px" height="2rem" alt="#">
				</div>
			</div>
		</div>
		<!-- End Preloader -->


		<!-- Header Area -->
		<header class="header">
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-4  col-md-4 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="{{ route('beranda') }}">
										<img src="{{ asset('img/logo_pinkan.png') }}" width="50px" height="5rem" alt="#">
										<img src="img/PINKAN.svg" width="150px" height="5rem" alt="#">
									</a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-6 col-md-8 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li><a href="{{ route('beranda') }}">Beranda</a>
												<!-- <ul class="dropdown">
													<li><a href="index.html">Home Page 1</a></li>
												</ul> -->
											</li>
											<li class="active"><a href="{{ route('unduh') }}">Unduh </a></li>

											<li><a href="{{ route('tutorial') }}">Tutorial </a></li>
											</li>
											<li><a href="{{ route('tentang') }}">Tentang</a>
											</li>
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>
							<div class="col-lg-2 col-12">
								<div class="get-quote">
									<a href="appointment.html" class="btn">Masuk</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!-- End Header Area -->

		<!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-4  col-md-6 col-12">
							<div class="single-footer">
								<h2>Tentang Kami</h2>
								<p>PINKAN merupakan hasil karya dari Tim Program Kreativitas Mahasiswa Karsa Cipta dari Universitas Gadjah Mada yang memperoleh pendanaan dari Kemendikbudristek</p>
								<!-- Social -->
								<ul class="social">
									<li><a href="https://web.facebook.com/profile.php?id=61558771388079"><i class="icofont-facebook"></i></a></li>
									<li><a href="https://www.instagram.com/pkmkcugm_pinkan/"><i class="icofont-instagram"></i></a></li>
									<li><a href="https://www.youtube.com/channel/UCohbysOgnN8rT1sJTHfOvIQ"><i class="icofont-youtube"></i></a></li>
								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Tautan Cepat</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="{{ route('beranda') }}"><i class="fa fa-caret-right" aria-hidden="true"></i>Beranda</a></li>
											<li><a href="{{ route('unduh') }}"><i class="fa fa-caret-right" aria-hidden="true"></i>Unduh</a></li>
											
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
										
											<li><a href="{{ route('tutorial') }}"><i class="fa fa-caret-right" aria-hidden="true"></i>Tutorial</a></li>
											<li><a href="{{ route('tentang') }}"><i class="fa fa-caret-right" aria-hidden="true"></i>Tentang</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<div class="single-footer">
								<h2>Kontak</h2>
								<p>Hubungi terkait informasi dan pembaruan</p>
								
								<p>pkmkcpinkan@gmail.com</p>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="copyright-content">
								<p>© Copyright 2024 | Tim PKM KC Pinkan </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->

		<!-- jquery Min JS -->
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<!-- jquery Migrate JS -->
		<script src="{{ asset('js/jquery-migrate-3.0.0.js') }}"></script>
		<!-- jquery Ui JS -->
		<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
		<!-- Easing JS -->
		<script src="{{ asset('js/easing.js') }}"></script>
		<!-- Color JS -->
		<script src="{{ asset('js/colors.js') }}"></script>
		<!-- Popper JS -->
		<script src="{{ asset('js/popper.min.js') }}"></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
		<!-- Jquery Nav JS -->
		<script src="{{ asset('js/jquery.nav.js') }}"></script>
		<!-- Slicknav JS -->
		<script src="{{ asset('js/slicknav.min.js') }}"></script>
		<!-- ScrollUp JS -->
		<script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
		<!-- Niceselect JS -->
		<script src="{{ asset('js/niceselect.js') }}"></script>
		<!-- Tilt Jquery JS -->
		<script src="{{ asset('js/tilt.jquery.min.js') }}"></script>
		<!-- Owl Carousel JS -->
		<script src="{{ asset('js/owl-carousel.js') }}"></script>
		<!-- counterup JS -->
		<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
		<!-- Steller JS -->
		<script src="{{ asset('js/steller.js') }}"></script>
		<!-- Wow JS -->
		<script src="{{ asset('js/wow.min.js') }}"></script>
		<!-- Magnific Popup JS -->
		<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<!-- Main JS -->
		<script src="{{ asset('js/main.js') }}"></script>

	</body>

	</html>