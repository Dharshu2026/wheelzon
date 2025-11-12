<!DOCTYPE html>
<html lang="en">
  <head>

    <title>WheelzOn</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div id="footer">

    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Wheelz<span>On</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	           <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>

<li class="nav-item"><a class="nav-link" href="{{ route('bikes') }}">Bikes</a></li>
<li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>


	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">About Us</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-about">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
					</div>
					<div class="col-md-6 wrap-about ftco-animate">
	          <div class="heading-section heading-section-white pl-md-5">
	          	<span class="subheading">About us</span>
	            <h2 class="mb-4">Welcome to WheelzOn</h2>

	            <p>Our Rental Bike System is designed to make two-wheeler rentals simple, fast, and secure. Users can browse available bikes, compare pricing, and book instantly through a user-friendly platform. The system manages booking details, customer records, and availability in real-time to ensure a smooth experience.</p>
	            <p><a href="{{ route('bikes') }}" class="btn btn-primary py-3 px-4">Search Vehicle</a></p>

	          </div>
					</div>
				</div>
			</div>
		</section>

		<!-- <section class="ftco-section ftco-intro" style="background-image: url(images/bg_3.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-md-6 heading-section heading-section-white ftco-animate">
            <h2 class="mb-3">Do You Want To Earn With Us? So Don't Be Late.</h2>
            <a href="#" class="btn btn-primary btn-lg">Become A Driver</a>
          </div>
				</div>
			</div>
		</section> -->


   
    

     <footer class="ftco-footer ftco-bg-dark ftco-section" style="color:#fff;">
  <div class="container">
    <div class="row mb-5">
      
      <!-- Brand & Description -->
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2"><a href="#" class="logo" style="color:#fff;">Wheelz<span style="color:#F96D00;">On</span></a></h2>
          <p>Our Rental Bike System is designed to make two-wheeler rentals simple, fast, and secure. Users can browse available bikes, compare pricing, and book instantly through a user-friendly platform.</p>
          
        </div>
      </div>

      <!-- Quick Links -->
      <div class="col-md">
        <div class="ftco-footer-widget mb-4 ml-md-5">
          <h2 class="ftco-heading-2">Quick Links</h2>
          <ul class="list-unstyled">
            <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
            <li><a href="{{ route('about') }}" class="nav-link">About</a></li>
            <li><a href="{{ route('services') }}" class="nav-link">Services</a></li>
            <li><a href="{{ route('bikes') }}" class="nav-link">Bikes</a></li>
            <li><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>

      <!-- Contact Info -->
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Have Questions?</h2>
          <div class="block-23 mb-3">
            <ul>
              <li><i class="fa-solid fa-location-dot mr-2"></i><span class="text">Tamil Nadu, India</span></li>
              <li><a href="#"><i class="fa-solid fa-phone mr-2"></i><span class="text">+91 98652 22580</span></a></li>
              <li><a href="mailto:dharshdharsh1020@gmail.com"><i class="fa-solid fa-envelope mr-2"></i><span class="text">dharshdharsh1020@gmail.com</span></a></li>
            </ul>
          </div>
        </div>
      </div>

    </div>

    <!-- Copyright -->
    <div class="row">
      <div class="col-md-12 text-center">
        <p class="mb-0">
          &copy; <script>document.write(new Date().getFullYear());</script> WheelzOn | All Rights Reserved
        </p>
      </div>
    </div>
  </div>
</footer>

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  <script src="footer.js"></script>
  </body>
</html>