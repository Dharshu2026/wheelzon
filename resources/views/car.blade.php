<!DOCTYPE html>
<html lang="en">
  <head>
    <title>WheelzOn</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
<link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Wheelz<span>On</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ms-auto">
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
    
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('images/bg_3.jpg') }}');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> 
          <span>Bikes <i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">Choose Your Bike</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row">
      
  
      <!-- Bike 4 -->
      <div class="col-md-4">
        <div class="car-wrap rounded ftco-animate">
          <div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('images/bike-5.jpg') }}');"></div>
          <div class="text">
            <h2 class="mb-0"><a href="#">RX100</a></h2>
            <div class="d-flex mb-3">
              <p class="price ml-auto">Rs:2000 <span>/day</span></p>
            </div>
            <p class="d-flex mb-0 d-block">
              <a href="{{ route('book.create') }}" class="btn btn-primary py-2 mr-1">Book now</a>
              <a href="#" class="btn btn-secondary py-2 ml-1">Details</a>
            </p>
          </div>
        </div>
      </div>

      <!-- Bike 5 -->
      <div class="col-md-4">
        <div class="car-wrap rounded ftco-animate">
          <div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('images/bike-6.png') }}');"></div>
          <div class="text">
            <h2 class="mb-0"><a href="#">Z900</a></h2>
            <div class="d-flex mb-3">
              <p class="price ml-auto">Rs:3500 <span>/day</span></p>
            </div>
            <p class="d-flex mb-0 d-block">
              <a href="{{ route('book.create') }}" class="btn btn-primary py-2 mr-1">Book now</a>
              <a href="#" class="btn btn-secondary py-2 ml-1">Details</a>
            </p>
          </div>
        </div>
      </div>

      <!-- Bike 6 -->
      <div class="col-md-4">
        <div class="car-wrap rounded ftco-animate">
          <div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('images/bike-7.jpg') }}');"></div>
          <div class="text">
            <h2 class="mb-0"><a href="#">H2R</a></h2>
            <div class="d-flex mb-3">
              <p class="price ml-auto">Rs:2500 <span>/day</span></p>
            </div>
            <p class="d-flex mb-0 d-block">
              <a href="{{ route('book.create') }}" class="btn btn-primary py-2 mr-1">Book now</a>
              <a href="#" class="btn btn-secondary py-2 ml-1">Details</a>
            </p>
          </div>
        </div>
      </div>

      <!-- Bike 7 -->
      <div class="col-md-4">
        <div class="car-wrap rounded ftco-animate">
          <div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('images/bike-8.jpg') }}');"></div>
          <div class="text">
            <h2 class="mb-0"><a href="#">Ducati Monster</a></h2>
            <div class="d-flex mb-3">
              <p class="price ml-auto">Rs:4000 <span>/day</span></p>
            </div>
            <p class="d-flex mb-0 d-block">
              <a href="{{ route('book.create') }}" class="btn btn-primary py-2 mr-1">Book now</a>
              <a href="#" class="btn btn-secondary py-2 ml-1">Details</a>
            </p>
          </div>
        </div>
      </div>

      <!-- Bike 8 -->
      <div class="col-md-4">
        <div class="car-wrap rounded ftco-animate">
          <div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('images/bike-9.jpg') }}');"></div>
          <div class="text">
            <h2 class="mb-0"><a href="#">R15 V4</a></h2>
            <div class="d-flex mb-3">
              <p class="price ml-auto">Rs:1800 <span>/day</span></p>
            </div>
            <p class="d-flex mb-0 d-block">
              <a href="{{ route('book.create') }}" class="btn btn-primary py-2 mr-1">Book now</a>
              <a href="#" class="btn btn-secondary py-2 ml-1">Details</a>
            </p>
          </div>
        </div>
      </div>

      <!-- Bike 9 -->
      <div class="col-md-4">
        <div class="car-wrap rounded ftco-animate">
          <div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('images/bike-10.jpeg') }}');"></div>
          <div class="text">
            <h2 class="mb-0"><a href="#">KTM Duke 390</a></h2>
            <div class="d-flex mb-3">
              <p class="price ml-auto">Rs:2200 <span>/day</span></p>
            </div>
            <p class="d-flex mb-0 d-block">
              <a href="{{ route('book.create') }}" class="btn btn-primary py-2 mr-1">Book now</a>
              <a href="#" class="btn btn-secondary py-2 ml-1">Details</a>
            </p>
          </div>
        </div>
      </div>

      <!-- Bike 10 -->
      <div class="col-md-4">
        <div class="car-wrap rounded ftco-animate">
          <div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('images/bike-11.jpg') }}');"></div>
          <div class="text">
            <h2 class="mb-0"><a href="#">Royal Enfield Hunter</a></h2>
            <div class="d-flex mb-3">
              <p class="price ml-auto">Rs:1600 <span>/day</span></p>
            </div>
            <p class="d-flex mb-0 d-block">
              <a href="{{ route('book.create') }}" class="btn btn-primary py-2 mr-1">Book now</a>
              <a href="#" class="btn btn-secondary py-2 ml-1">Details</a>
            </p>
          </div>
        </div>
      </div>

      <!-- Bike 11 -->
      <div class="col-md-4">
        <div class="car-wrap rounded ftco-animate">
          <div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('images/bike-12.jpg') }}');"></div>
          <div class="text">
            <h2 class="mb-0"><a href="#">Yamaha MT15</a></h2>
            <div class="d-flex mb-3">
              <p class="price ml-auto">Rs:1700 <span>/day</span></p>
            </div>
            <p class="d-flex mb-0 d-block">
              <a href="{{ route('book.create') }}" class="btn btn-primary py-2 mr-1">Book now</a>
              <a href="#" class="btn btn-secondary py-2 ml-1">Details</a>
            </p>
          </div>
        </div>
      </div>

      <!-- Bike 12 -->
      <div class="col-md-4">
        <div class="car-wrap rounded ftco-animate">
          <div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('images/bike-13.jpg') }}');"></div>
          <div class="text">
            <h2 class="mb-0"><a href="#">Pulsar N250</a></h2>
            <div class="d-flex mb-3">
              <p class="price ml-auto">Rs:1400 <span>/day</span></p>
            </div>
            <p class="d-flex mb-0 d-block">
              <a href="{{ route('book.create') }}" class="btn btn-primary py-2 mr-1">Book now</a>
              <a href="#" class="btn btn-secondary py-2 ml-1">Details</a>
            </p>
          </div>
        </div>
      </div>
<div class="col-md-4">
        <div class="car-wrap rounded ftco-animate">
          <div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('images/bike-14.webp') }}');"></div>
          <div class="text">
            <h2 class="mb-0"><a href="#">BMW G310R</a></h2>
            <div class="d-flex mb-3">
              <p class="price ml-auto">Rs:3000 <span>/day</span></p>
            </div>
            <p class="d-flex mb-0 d-block">
              <a href="{{ route('book.create') }}" class="btn btn-primary py-2 mr-1">Book now</a>
              <a href="#" class="btn btn-secondary py-2 ml-1">Details</a>
            </p>
          </div>
        </div>
      </div>

      <!-- BMW Bike 2 -->
      <div class="col-md-4">
        <div class="car-wrap rounded ftco-animate">
          <div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('images/bike-15.webp') }}');"></div>
          <div class="text">
            <h2 class="mb-0"><a href="#">BMW S1000RR</a></h2>
            <div class="d-flex mb-3">
              <p class="price ml-auto">Rs:5500 <span>/day</span></p>
            </div>
            <p class="d-flex mb-0 d-block">
              <a href="{{ route('book.create') }}" class="btn btn-primary py-2 mr-1">Book now</a>
              <a href="#" class="btn btn-secondary py-2 ml-1">Details</a>
            </p>
          </div>
        </div>
      </div>

      <!-- BMW Bike 3 -->
      <div class="col-md-4">
        <div class="car-wrap rounded ftco-animate">
          <div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('images/bike-16.webp') }}');"></div>
          <div class="text">
            <h2 class="mb-0"><a href="#">BMW R1250GS</a></h2>
            <div class="d-flex mb-3">
              <p class="price ml-auto">Rs:5000 <span>/day</span></p>
            </div>
            <p class="d-flex mb-0 d-block">
              <a href="{{ route('book.create') }}" class="btn btn-primary py-2 mr-1">Book now</a>
              <a href="#" class="btn btn-secondary py-2 ml-1">Details</a>
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

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


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
