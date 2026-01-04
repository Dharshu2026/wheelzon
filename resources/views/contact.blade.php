<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact | WheelzOn</title>
<link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">
    <!-- Google Fonts + CSS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
      body {
        font-family: 'Poppins', sans-serif;
      }
      .contact-section {
        background: #000000ff;
        color: #fff;
        position: relative;
        overflow: hidden;
      }
      .contact-section::before {
        content: "";
        background: url('{{ asset('images/bg_3.jpg') }}') center/cover no-repeat;
        position: absolute;
        inset: 0;
        opacity: 0.15;
      }
      .contact-form {
        background: rgba(255,255,255,0.08);
        backdrop-filter: blur(10px);
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 0 25px rgba(255,255,255,0.05);
      }
      .contact-form input,
      .contact-form textarea {
        background: rgba(255,255,255,0.1);
        border: none;
        color: #fff;
      }
      .contact-form input::placeholder,
      .contact-form textarea::placeholder {
        color: #aaa;
      }
      .btn-orange {
        background: #F96D00;
        border: none;
        color: #fff;
        transition: 0.3s ease;
      }
      .btn-orange:hover {
        background: #ff7f20;
        box-shadow: 0 0 15px #F96D00;
      }
    .info-box h5,
.ftco-footer-widget ul li {
  color: #fff !important;
}

.ftco-footer-widget ul li i {
  color: #F96D00;
  margin-right: 8px;
}

      .info-box:hover {
        background: #fff
        transform: translateY(-5px);
      }
      footer {
        background: #fff;
      }
    </style>
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

          <!-- 🔥 Added Login button -->
          <li class="nav-item">
            <a class="nav-link btn btn-primary text-white px-3 ml-3" href="{{ route('login') }}">Login</a>
          </li>

        </ul>
      </div>
    </div>
</nav>


  <!-- Hero -->
  <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{ asset('images/bg_3.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <p class="breadcrumbs text-white"><span class="mr-2"><a href="{{ url('/') }}" class="text-white">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread text-white">Get In Touch</h1>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact-section py-5">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-8 text-center">
          <h2 class="mb-3 fw-bold text-white">Let’s Connect</h2>
          <p class="text-muted">Have questions? Reach out and we’ll help you find the right ride!</p>
        </div>
      </div>

      <div class="row">
        <!-- Info -->
        <div class="col-md-4 mb-4">
          <div class="info-box mb-3">
            <i class="fa-solid fa-location-dot fa-2x mb-3 text-warning"></i>
            <h5>Tamil Nadu, India</h5>
          </div>
          <div class="info-box mb-3">
            <i class="fa-solid fa-phone fa-2x mb-3 text-warning"></i>
            <h5>+91 12345 67890</h5>
          </div>
          <div class="info-box">
            <i class="fa-solid fa-envelope fa-2x mb-3 text-warning"></i>
            <h5>dharshdharsh1020@gmail.com</h5>
          </div>
        </div>

        <!-- Form -->
        <div class="col-md-8">
          <div class="contact-form">
            @if(session('success'))
              <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <form action="{{ route('contact.send') }}" method="POST">
              @csrf
              <div class="form-group mb-3">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
              </div>
              <div class="form-group mb-3">
                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
              </div>
              <div class="form-group mb-3">
                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
              </div>
              <div class="form-group mb-4">
                <textarea name="message" rows="6" class="form-control" placeholder="Your Message" required></textarea>
              </div>
              <button type="submit" class="btn btn-orange py-3 px-5 rounded-pill">Send Message</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="ftco-footer ftco-bg-dark ftco-section" style="color:#fff;">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2"><a href="#" class="logo" style="color:#fff;">Wheelz<span style="color:#F96D00;">On</span></a></h2>
            <p>Our Rental Bike System is designed to make two-wheeler rentals simple, fast, and secure. Users can browse available bikes, compare pricing, and book instantly through a user-friendly platform.</p>
          </div>
        </div>
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
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Have Questions?</h2>
            <ul>
              <li><i class="fa-solid fa-location-dot mr-2"></i> Tamil Nadu, India</li>
              <li><i class="fa-solid fa-phone mr-2"></i> +91 123 45 678</li>
              <li><i class="fa-solid fa-envelope mr-2"></i> dharshdharsh1020@gmail.com</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-12">
          <p class="mb-0">&copy; <script>document.write(new Date().getFullYear());</script> WheelzOn | All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
