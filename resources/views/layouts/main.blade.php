<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Safari |  {{$title}}</title>
    <meta name="description" content="Petroleum Safari, a leading entity in petroleum products and gas. Our vision is to become a one stop shop for your energy needs.">
    <meta name="keywords" content="petro, industrial, oil and gas, company, manufacturing, mechanical, power and energy, engineering">
    <meta name="author" content="rudhisasmito.com">

	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="{{config('app.url')}}/images/icon.png">
	<link rel="apple-touch-icon" href="{{config('app.url')}}/images/icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="{{config('app.url')}}/images/icon.png">
	<link rel="apple-touch-icon" sizes="114x114" href="{{config('app.url')}}/images/icon.png">

	<!-- ==============================================
	CSS VENDOR
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="{{config('app.url')}}/css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="{{config('app.url')}}/css/vendor/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{config('app.url')}}/css/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="{{config('app.url')}}/css/vendor/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="{{config('app.url')}}/css/vendor/magnific-popup.css">

	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="{{config('app.url')}}/css/style.css" />

    <script type="text/javascript" src="{{config('app.url')}}/js/vendor/modernizr.min.js"></script>

</head>

<body>

	<!-- Load page -->
	<div class="animationload">
		<div class="loader"></div>
	</div>

	<!-- BACK TO TOP SECTION -->
	<a href="{{config('app.url')}}/#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

	<!-- HEADER -->
    <div class="header">
    	<!-- TOPBAR -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-sm-5 col-md-6">
						<div class="topbar-left">
							<div class="welcome-text">
							We help the world growing since 1997
							</div>
						</div>
					</div>
					<div class="col-sm-7 col-md-6">
						<div class="topbar-right">
							<ul class="topbar-menu">
								{{-- <li><a href="{{config('app.url')}}/career.html" title="Career">Career</a></li>
								<li><a href="{{config('app.url')}}/contact-feedback.html" title="Give Feedback">Give Feedback</a></li> --}}
								<li><a href="{{config('app.url')}}/contact" title="Contact Us">Contact Us</a></li>
							</ul>
							<ul class="topbar-sosmed">
							<li>
								<a href="{{config('app.url')}}/#"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="{{config('app.url')}}/#"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href="{{config('app.url')}}/#"><i class="fa fa-instagram"></i></a>
							</li>
							<li>
								<a href="{{config('app.url')}}/#"><i class="fa fa-pinterest"></i></a>
							</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- TOPBAR LOGO SECTION -->
		<div class="topbar-logo">
			<div class="container">


				<div class="contact-info">
					<!-- INFO 1 -->
					<div class="box-icon-1">
						<div class="icon">
							<div class="fa fa-envelope-o"></div>
						</div>
						<div class="body-content">
							<div class="heading">Email Support</div>
							petroleumsafari@gmail.com
						</div>
					</div>
					<!-- INFO 2 -->
					<div class="box-icon-1">
						<div class="icon">
							<div class="fa fa-phone"></div>
						</div>
						<div class="body-content">
							<div class="heading">Call Support</div>
							08 039683 201
						</div>
					</div>
					<!-- INFO 3 -->
					<a href="{{config('app.url')}}/contact.html" title="" class="btn btn-cta pull-right">GET A QUOTE</a>

				</div>
			</div>
		</div>

		<!-- NAVBAR SECTION -->
		<div class="navbar navbar-main">

			<div class="container container-nav">
				<div class="rowe">

					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

					</div>

					<a class="navbar-brand" href="{{config('app.url')}}/index.html">
						<img style="width:200px;height:auto;" src="{{config('app.url')}}/images/logo.png" alt="" />
					</a>

					<nav class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-left">
							<li class="@if($title == 'Home') active @endif">
							  <a href="{{config('app.url')}}/" role="button">HOME </a>
							</li>
							<li class="@if($title == 'About') active @endif">
							  <a href="{{config('app.url')}}/about">ABOUT US </a>
							</li>
							{{-- <li class="dropdown">
							  <a href="{{config('app.url')}}/#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SERVICES <span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="{{config('app.url')}}/services.html">SERVICES 1</a></li>
								<li><a href="{{config('app.url')}}/services-2.html">SERVICES 2</a></li>
								<li><a href="{{config('app.url')}}/services-detail.html">SERVICES DETAIL</a></li>
							  </ul>
							</li> --}}
							{{-- <li class="dropdown">
							  <a href="{{config('app.url')}}/#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PAGES <span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="{{config('app.url')}}/faq.html">FAQ</a></li>
								<li><a href="{{config('app.url')}}/pricing-table.html">PRICING TABLE</a></li>
								<li><a href="{{config('app.url')}}/404page.html">404 PAGE</a></li>
								<li><a href="{{config('app.url')}}/career.html">CAREER</a></li>
							  </ul>
							</li> --}}
							{{-- <li class="dropdown">
							  <a href="{{config('app.url')}}/#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PROJECTS <span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="{{config('app.url')}}/project-grid.html">GRID LAYOUT</a></li>
								<li><a href="{{config('app.url')}}/project-grid-2.html">GRID LAYOUT WITH LIGHTBOX</a></li>
								<li><a href="{{config('app.url')}}/project-detail.html">SINGLE PROJECT</a></li>
							  </ul>
							</li> --}}
							{{-- <li class="dropdown">
							  <a href="{{config('app.url')}}/#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NEWS <span class="caret"></span></a>
							  <ul class="dropdown-menu">
								<li><a href="{{config('app.url')}}/news-grid.html">GRID BAR</a></li>
								<li><a href="{{config('app.url')}}/news-sidebar.html">SIDEBAR</a></li>
								<li><a href="{{config('app.url')}}/news-detail.html">SINGLE NEWS</a></li>
							  </ul>
							</li> --}}
							<li class="@if($title == 'Contact') active @endif">
							  <a href="{{config('app.url')}}/contact" >CONTACT</a>

							</li>

						</ul>

						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
							  	<a href="{{config('app.url')}}/#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i></a>
						  		<ul class="dropdown-menu">
									<li>
										<form class="navbar-form navbar-left" role="search">
										  <div class="form-group">
										    <input type="text" class="form-control" placeholder="Type and hit enter">
										  </div>
										</form>
									</li>
							  	</ul>
							</li>
						</ul>

					</nav>

				</div>
			</div>
	    </div>

    </div>

	<!-- BANNER -->

        @yield('content')

	<!-- INFO BOX -->
	<div class="section info overlap-bottom">
		<div class="container">
			<div class="row">

				<div class="col-sm-4 col-md-4">
					<!-- BOX 1 -->
					<div class="box-icon-4">
						<div class="icon"><i class="fa fa-phone"></i></div>
						<div class="body-content">
							<div class="heading">CALL US NOW</div>
							Office Telephone: 08 039 683 201 <br>
							Mobile: 08 039 139 168
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<!-- BOX 2 -->
					<div class="box-icon-4">
						<div class="icon"><i class="fa fa-map-marker"></i></div>
						<div class="body-content">
							<div class="heading">COME VISIT US</div>
							Safari Petroleum Products Limited <br>
                            38 du Industrial Area A, Abuja. <br>
                            Federal Capital Territory Nigeria
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-4">
					<!-- BOX 3 -->
					<div class="box-icon-4">
						<div class="icon"><i class="fa fa-envelope"></i></div>
						<div class="body-content">
							<div class="heading">SEND US A MESSAGE</div>
							General: petroleumsafari@gmail.com<br>
							Sales: sales@petroleumsafari.com
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>

	<!-- FOOTER SECTION -->
	<div class="footer">

		<div class="container">

			<div class="row">
				<div class="col-sm-3 col-md-3">
					<div class="footer-item">
						<img src="{{config('app.url')}}/images/logo.png" alt="logo bottom" class="logo-bottom">
						<p>Safari PPL has
                            well-established oil and gas
                            pedigree with a reputation
                            for providing safe, innovative
                            and sustainable solutions to
                            production challenges.</p>
						<div class="footer-sosmed">
							<a href="{{config('app.url')}}/#" title="">
								<div class="item">
									<i class="fa fa-facebook"></i>
								</div>
							</a>
							<a href="{{config('app.url')}}/#" title="">
								<div class="item">
									<i class="fa fa-twitter"></i>
								</div>
							</a>
							<a href="{{config('app.url')}}/#" title="">
								<div class="item">
									<i class="fa fa-instagram"></i>
								</div>
							</a>
							<a href="{{config('app.url')}}/#" title="">
								<div class="item">
									<i class="fa fa-pinterest"></i>
								</div>
							</a>
						</div>
					</div>
				</div>
				{{-- <div class="col-sm-3 col-md-3">
					<div class="footer-item">
						<div class="footer-title">
							Recent Post
						</div>
						<ul class="recent-post">
							<li><a href="{{config('app.url')}}/#" title="">The Best in dolor sit amet consectetur adipisicing elit sed</a>
							<span class="date"><i class="fa fa-clock-o"></i> June 16, 2017</span></li><li><a href="{{config('app.url')}}/#" title="">The Best in dolor sit amet consectetur adipisicing elit sed</a>
							<span class="date"><i class="fa fa-clock-o"></i> June 16, 2017</span></li>
						</ul>
					</div>
				</div> --}}
				<div class="col-sm-6 col-md-6">
					<div class="footer-item">
						<div class="footer-title">
							Our Services
						</div>
						<ul class="list">
							<li><a href="{{config('app.url')}}/service-life-insurance.html" title="">Safari Petroleum Products Limited </a></li>
							<li><a href="{{config('app.url')}}/service-car-insurance.html" title="">Our Vision and Legacy</a></li>
							<li><a href="{{config('app.url')}}/service-travel-insurance" title="">Health, Safety, Environment & Quality</a></li>
							<li><a href="{{config('app.url')}}/service-house-insurance.html" title="">Operations and Maintenance</a></li>
							<li><a href="{{config('app.url')}}/service-vehicle-insurance.html" title="">Wellsites</a></li>
							<li><a href="{{config('app.url')}}/service-boat-insurance.html" title="">Production Assurance</a></li>
							<li><a href="{{config('app.url')}}/service-boat-insurance.html" title="">Engineering</a></li>

							<li><a href="{{config('app.url')}}/service-boat-insurance.html" title="">Our Fully Integrated Services</a></li>
							<li><a href="{{config('app.url')}}/service-boat-insurance.html" title="">Our Locations</a></li>

						</ul>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="footer-item">
						<div class="footer-title">
							Subscribe
						</div>
						<p>Stay connected and get notified by subscribing to our newsletter.</p>
						<form action="#" class="footer-subscribe">
			              <input type="email" name="EMAIL" class="form-control" placeholder="enter your email">
			              <input id="p_submit" type="submit" value="send">
			              <label for="p_submit"><i class="fa fa-envelope"></i></label>
			              <p>Get latest updates and offers.</p>
			            </form>
					</div>
				</div>
			</div>
		</div>

		<div class="fcopy">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<p class="ftex">&copy; 2022 Safari Gas and Oil - All Rights Reserved</p>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- JS VENDOR -->
	<script type="text/javascript" src="{{config('app.url')}}/js/vendor/jquery.min.js"></script>
	<script type="text/javascript" src="{{config('app.url')}}/js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{config('app.url')}}/js/vendor/jquery.superslides.js"></script>
	<script type="text/javascript" src="{{config('app.url')}}/js/vendor/owl.carousel.js"></script>
	<script type="text/javascript" src="{{config('app.url')}}/js/vendor/bootstrap-hover-dropdown.min.js"></script>
	<script type="text/javascript" src="{{config('app.url')}}/js/vendor/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="{{config('app.url')}}/js/vendor/easings.js"></script>
	<script type="text/javascript" src="{{config('app.url')}}/js/vendor/isotope.pkgd.min.js"></script>

	<!-- sendmail -->
	<script type="text/javascript" src="{{config('app.url')}}/js/vendor/validator.min.js"></script>
	<script type="text/javascript" src="{{config('app.url')}}/js/vendor/form-scripts.js"></script>

	<script type='text/javascript' src='https://maps.google.com/maps/api/js?sensor=false&#038;ver=4.1.5'></script>

	<script type="text/javascript" src="{{config('app.url')}}/js/script.js"></script>


</body>
</html>
