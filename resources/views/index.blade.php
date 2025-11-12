<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
  /* Fix for white text inside dropdown */
  .request-form select.form-control {
    background-color: #fff;
    color: #000; /* text black */
    border: none;
    border-radius: 5px;
    font-weight: 500;
  }

  /* Dropdown list items also black */
  .request-form select.form-control option {
    background-color: #fff;
    color: #000;
  }

  /* Optional: hover effect */
  .request-form select.form-control option:hover {
    background-color: #007bff;
    color: #fff;
  }
</style>


<link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">
    <title>WheelzOn</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index">Wheelz<span>On</span></a>
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
    
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ftco-animate">
          	<div class="text w-100 text-center mb-md-5 pb-md-5">
	            <h1 class="mb-4">Fast &amp; Easy Way To Rent A Bike</h1>
	            <p style="font-size: 18px;">“No bike? No problem. We’ve got your ride”</p>
	            <!-- <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
	            	<div class="icon d-flex align-items-center justify-content-center"> -->
	            		<!-- <span class="ion-ios-play"></span>
	            	</div> -->
	            	<div class="heading-title ml-5">
		            	<span>“Freedom on two wheels- just a click away”</span>
	            	</div>
	            </a>
            </div>
          </div>
        </div>
      </div>
    </div>

     <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-12	featured-top">
    				<div class="row no-gutters">
	  					<div class="col-md-4 d-flex align-items-center">
	  <form action="{{ route('book') }}" method="GET" class="request-form ftco-animate bg-primary" style="width: 500px; border-radius: 10px; padding: 25px;">
  <h2 class="text-white mb-4">Make your trip</h2>

  <div class="form-group">
    <label class="label text-white">Pick-up Location</label>
    <select name="pickup_location" class="form-control" required>
      <option value="">Select Pickup Area</option>
      <option value="Madurai">Madurai</option>
      <option value="Trichy">Trichy</option>
      <option value="Coimbatore">Coimbatore</option>
      <option value="Chennai">Chennai</option>
      <option value="Tirunelveli">Tirunelveli</option>
      <option value="Salem">Salem</option>
      <option value="Erode">Erode</option>
      <option value="Thanjavur">Thanjavur</option>
      <option value="Dindigul">Dindigul</option>
      <option value="Nagercoil">Nagercoil</option>
      <option value="Kanyakumari">Kanyakumari</option>
      <option value="Karaikudi">Karaikudi</option>
      <option value="Vellore">Vellore</option>
    </select>
  </div>

  <div class="form-group">
    <label class="label text-white">Drop-off Location</label>
    <select name="drop_location" class="form-control" required>
      <option value="">Select Drop-off Area</option>
      <option value="Madurai">Madurai</option>
      <option value="Trichy">Trichy</option>
      <option value="Coimbatore">Coimbatore</option>
      <option value="Chennai">Chennai</option>
      <option value="Tirunelveli">Tirunelveli</option>
      <option value="Salem">Salem</option>
      <option value="Erode">Erode</option>
      <option value="Thanjavur">Thanjavur</option>
      <option value="Dindigul">Dindigul</option>
      <option value="Nagercoil">Nagercoil</option>
      <option value="Kanyakumari">Kanyakumari</option>
      <option value="Karaikudi">Karaikudi</option>
      <option value="Vellore">Vellore</option>
    </select>
  </div>

  <div class="d-flex">
    <div class="form-group mr-2 w-50">
      <label class="label text-white">Pick-up Date</label>
      <input type="date" name="pickup_date" class="form-control" required>
    </div>

    <div class="form-group ml-2 w-50">
      <label class="label text-white">Return Date</label>
      <input type="date" name="return_date" class="form-control" required>
    </div>
  </div>

  <div class="form-group mt-3">
    <input type="submit" value="Rent A Bike Now" class="btn btn-secondary py-3 px-4 w-100">
  </div>
</form>


	  					</div>
	  			<div class="col-md-8 d-flex align-items-center">
       <div class="services-wrap rounded-right w-100">
    <h3 class="heading-section mb-4">Better Way to Rent Your Perfect Bikes</h3>
    <div class="row d-flex mb-4">

    <div class="col-md-4 d-flex align-self-stretch ftco-animate">
  <div class="services w-100 text-center">
    <div class="icon d-flex align-items-center justify-content-center mb-3">
      <i class="fa-solid fa-location-dot fa-3x" style="color:#007bff;"></i>
    </div>
    <div class="text w-100">
      <h3 class="heading mb-2" style="color:#333;">Choose Your Pickup Location</h3>
    </div>
  </div>      
</div>

<div class="col-md-4 d-flex align-self-stretch ftco-animate">
  <div class="services w-100 text-center">
    <div class="icon d-flex align-items-center justify-content-center mb-3">
      <i class="fa-solid fa-handshake fa-3x" style="color:#007bff;"></i>
    </div>
    <div class="text w-100">
      <h3 class="heading mb-2" style="color:#333;">Select the Best Deal</h3>
    </div>
  </div>      
</div>

<div class="col-md-4 d-flex align-self-stretch ftco-animate">
  <div class="services w-100 text-center">
    <div class="icon d-flex align-items-center justify-content-center mb-3">
      <i class="fa-solid fa-motorcycle fa-3x" style="color:#007bff;"></i>
    </div>
    <div class="text w-100">
      <h3 class="heading mb-2" style="color:#333;">Reserve Your Rental Bike</h3>
    </div>
  </div>      
</div>

    </div>

    <p><a href="{{ route('bikes') }}" class="btn btn-primary py-3 px-4">Reserve Your Perfect Bike</a></p>
  </div>
</div>

	  				</div>
				</div>
  		</div>
    </section>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="ftco-section" style="background-color: #000; color: white; padding: 60px 0;">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <span class="subheading" style="color:#bbb;">Services</span>
        <h2 class="mb-3">What WheelzOn Offers</h2>
        <p>At <strong>WheelzOn</strong>, we make every ride simple, affordable, and reliable for our customers.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3 text-center mb-4">
        <div class="services services-2 w-100">
          <div class="icon d-flex align-items-center justify-content-center mb-3">
            <i class="fas fa-motorcycle fa-3x" style="color:white;"></i>
          </div>
          <div class="text w-100">
            <h3 class="heading mb-2" style="color:white;">Daily Bike Rentals</h3>
            <p style="color:#ccc;">Rent bikes for a day or more at affordable prices with easy pickup and drop locations.</p>
          </div>
        </div>
      </div>

      <div class="col-md-3 text-center mb-4">
        <div class="services services-2 w-100">
          <div class="icon d-flex align-items-center justify-content-center mb-3">
            <i class="fas fa-city fa-3x" style="color:white;"></i>
          </div>
          <div class="text w-100">
            <h3 class="heading mb-2" style="color:white;">City Commute Plans</h3>
            <p style="color:#ccc;">Perfect for your everyday rides around the city with flexible and budget-friendly packages.</p>
          </div>
        </div>
      </div>

      <div class="col-md-3 text-center mb-4">
        <div class="services services-2 w-100">
          <div class="icon d-flex align-items-center justify-content-center mb-3">
            <i class="fas fa-road fa-3x" style="color:white;"></i>
          </div>
          <div class="text w-100">
            <h3 class="heading mb-2" style="color:white;">Long Ride Rentals</h3>
            <p style="color:#ccc;">Explore highways and hills with our top-quality bikes designed for long-distance comfort.</p>
          </div>
        </div>
      </div>

      <div class="col-md-3 text-center mb-4">
        <div class="services services-2 w-100">
          <div class="icon d-flex align-items-center justify-content-center mb-3">
            <i class="fas fa-tools fa-3x" style="color:white;"></i>
          </div>
          <div class="text w-100">
            <h3 class="heading mb-2" style="color:white;">24/7 Road Assistance</h3>
            <p style="color:#ccc;">Enjoy worry-free rides — WheelzOn offers full-time support and on-road help whenever needed.</p>
          </div>
        </div>
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

	            <p>Your trusted partner for hassle-free bike rentals. We make exploring easy, affordable, and exciting for everyone who loves the open road. Whether you need a ride for a quick city trip, a weekend getaway, or a daily commute, Wheelzon offers a wide range of well-maintained bikes ready to roll.

Our goal is simple — to provide freedom, convenience, and comfort on two wheels. With just a few clicks, you can rent, ride, and enjoy your journey without any worries.

At Wheelzon, we believe every ride tells a story — so let yours begin with us!</p>
	           <button><a class="nav-link" href="{{ route('bikes') }}">Search Vehicle</a></button>

	          </div>
					</div>
				</div>
			</div>
		</section>





		<!-- <section class="ftco-section ftco-intro" style="background-image: url(images/.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-md-6 heading-section heading-section-white ftco-animate">
            <h2 class="mb-3">Do You Want To Earn With Us? So Don't Be Late.</h2>
            <a href="#" class="btn btn-primary btn-lg">Become A Driver</a>
          </div>
				</div>
			</div>
		</section>
 -->

   

   

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
    <script>
  $(document).ready(function(){
    $('.datepicker').datepicker({
      format: 'dd-mm-yyyy',
      autoclose: true,
      todayHighlight: true
    });
  });
</script>

  </body>
</html>