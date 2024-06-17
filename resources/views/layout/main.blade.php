<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
        <!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
        <title>@yield('title')</title>
		
		<!-- Favicon -->
        <link rel="icon" href="img/favicon.png">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }} ">
		<!--link rel="stylesheet" href="css/style.css"-->

		<!-- Nice Select CSS -->
		<link rel="stylesheet" href="{{ URL::asset('css/nice-select.css') }} ">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }} ">
		<!-- icofont CSS -->
        <link rel="stylesheet" href="{{ URL::asset('css/icofont.css') }} ">
		<!-- Slicknav -->
		<link rel="stylesheet" href="{{ URL::asset('css/slicknav.min.css') }} ">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{ URL::asset('css/owl-carousel.css') }} ">
		<!-- Datepicker CSS -->
		<link rel="stylesheet" href="{{ URL::asset('css/datepicker.css') }} ">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="{{ URL::asset('css/animate.min.css') }} ">
		<!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }} ">
		
		<!-- Medipro CSS -->
        <link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }} ">
        <link rel="stylesheet" href="{{ URL::asset('style.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }} ">
        <link rel="stylesheet" href="{{ URL::asset('css/custom-style.css') }} ">
		
    </head>
    <body>
			<!-- Preloader -->
            <div class="preloader">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>

                <div class="indicator"> 
                    <svg width="16px" height="12px">
                        <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    </svg>
                </div>
            </div>
        </div>
        <!-- End Preloader -->
		
		<!-- Get Pro Button -->
		
		<!-- Header Area -->
		<header class="header" >
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-5 col-12">
					
							<!-- Contact 
							<ul class="top-link">
								<li><a href="#">About</a></li>
								<li><a href="#">Doctors</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">FAQ</a></li>
							</ul>
							End Contact -->
						</div>
				  <div class="col-lg-6 col-md-7 col-12">
			<!-- Top Contact -->
				<ul class="top-contact">
	  				<li><i class="fa fa-phone"></i>+244 943 206 650</li>
					<li><i class="fa fa-envelope"></i><a href="reserva:hotelpiramide@gmail.com">hotelpiramide@gmail.com</a></li>
					<li><i class="fa fa-map-marker"></i><a href="Luanda:Pedro Tuca">Pedro Tuca<a></li>
				</ul>
					<!-- End Top Contact -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
									<a href="index.html"><img src="img/logo.png" alt="#"></a>
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-7 col-md-9 col-12">
								
								<!-- Main Menu -->
								<div class="main-menu menu-right">
									<style>
										.menu-right{
											float: right;
											margin-right: 30px
										}
										</style>
									<nav class="navigation">
										
										<ul class="nav menu">
							
											<li><a href="#">Principal <i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="/quartos">Quartos</a></li>
												</ul>
											</li>
											<li><a href="#">serviços<i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
											<li><a href="blog-single.html">Aluguer</a></li>
											<li><a href="blog-single.html">Eventos</a></li>
										    <li><a href="blog-single.html">Promoções</a></li>
												</ul>
											</li>
											<li><a href="reserva.html">Reserva</a></li>
										</ul>
									</nav>
								</div>
								  <!--End Main Menu--> 
							</div>
							
							<div class="col-lg-2 col-12">
								<div class="get-quote">
									<a href="appointment.html" class="btn">Entrar</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Header Inner -->
		</header>
		<!-- End Header Area -->



        <section class="Feautes section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
                            @yield('content')
					</div>
				</div>
		    </div>
		</section>
		<!-- /End Newsletter Area -->


		<!-- Footer Area -->
		<footer id="footer" class="footer ">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Sobre Nós</h2>
								<p>O Hotel Pirâmide, cita em Luanda, rua José Pedro Tuca nº 41 Bairro dos Coqueiros- Ingombotas, na pretensão de proporcionar serviços de excelência e qualidade em hospedagem, restauração, salão de Beleza e PUB Pirâmide com finalidade de gerar satisfação dos nossos clientes e colaboradores...</p>
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-google-plus"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-vimeo"></i></a></li>
									<li><a href="#"><i class="icofont-pinterest"></i></a></li>
								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Links Rápidos</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Sobre Nós</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Serviços</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Aluguer</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Empresas</a></li>	
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Agenfor</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Royal SA</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>EDS</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Consep</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Resindencial</a></li>	
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Dias Atendimento</h2>
								<ul class="time-sidual">
									<li class="day">Segunda-Feira <span>24/24</span></li>
									<li class="day">Terça-Feira <span>24/24</span></li>
									<li class="day">Quarta-Feira <span>24/24</span></li>
									<li class="day">Quinta-Feira <span>24/24</span></li>
									<li class="day">Sexta-Feira <span>24/24</span></li>
									<li class="day">Sábado <span>24/24</span></li>
									<li class="day">Domingo <span>24/24</span></li>
								</ul>
							</div>
						</div>
						/<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
						
						</form>
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
								<p>© Copyright 2018  |  All Rights Reserved by <a href="https://www.SGHMR.com" target="_blank">SGHMR.com</a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		<!--/ End Footer Area -->


		<!-- jquery Min JS -->
        <script src="{{ URL::asset('js/jquery.min.js') }} "></script>
		<!-- jquery Migrate JS -->
		<script src="{{ URL::asset('js/jquery-migrate-3.0.0.js') }} "></script>
		<!-- jquery Ui JS -->
		<script src="{{ URL::asset('js/jquery-ui.min.js') }} "></script>
		<!-- Easing JS -->
        <script src="{{ URL::asset('js/easing.js') }} "></script>
		<!-- Color JS -->
		<script src="{{ URL::asset('js/colors.js') }} "></script>
		<!-- Popper JS -->
		<script src="{{ URL::asset('js/popper.min.js') }} "></script>
		<!-- Bootstrap Datepicker JS -->
		<script src="{{ URL::asset('js/bootstrap-datepicker.js') }} "></script>
		<!-- Jquery Nav JS -->
        <script src="{{ URL::asset('js/jquery.nav.js') }} "></script>
		<!-- Slicknav JS -->
		<script src="{{ URL::asset('js/slicknav.min.js') }} "></script>
		<!-- ScrollUp JS -->
        <script src="{{ URL::asset('js/jquery.scrollUp.min.js') }} "></script>
		<!-- Niceselect JS -->
		<script src="{{ URL::asset('js/niceselect.js') }} "></script>
		<!-- Tilt Jquery JS -->
		<script src="{{ URL::asset('js/tilt.jquery.min.js') }} "></script>
		<!-- Owl Carousel JS -->
        <script src="{{ URL::asset('js/owl-carousel.js') }} "></script>
		<!-- counterup JS -->
		<script src="{{ URL::asset('js/jquery.counterup.min.js') }} "></script>
		<!-- Steller JS -->
		<script src="{{ URL::asset('js/steller.js') }} "></script>
		<!-- Wow JS -->
		<script src="{{ URL::asset('js/wow.min.js') }} "></script>
		<!-- Magnific Popup JS -->
		<script src="{{ URL::asset('js/jquery.magnific-popup.min.js') }} "></script>
		<!-- Counter Up CDN JS -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="{{ URL::asset('js/bootstrap.min.js') }} "></script>
		<!-- Main JS -->
		<script src="{{ URL::asset('js/main.js') }} "></script>

	<!--calendar date upward -->
	<script type="text/javascript"> 
		$(function(){
			var dtToday = new Date();
		
			var month = dtToday.getMonth() + 1;

			var day = dtToday.getDate();

			var year = dtToday.getFullYear();

			if(month < 10)
				month = '0' + month.toString();

			if(day < 10)
			day = '0' + day.toString();

			var maxDate = year + '-' + month + '-' + day;
			$('#data_entrada').attr('min', maxDate);
			$('#data_saida').attr('min', maxDate);

		});
	</script>

    </body>
</html>