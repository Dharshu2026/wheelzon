<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>WheelzOn | @yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        .navbar-brand span { color: #f96d00 !important; }
        /* Dropdown black text fix */
        .dropdown-menu { background: #fff !important; border: none; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        .dropdown-item { color: #000 !important; }
        .dropdown-item:hover { background: #f96d00; color: #fff !important; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">Wheelz<span>On</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('bikes') }}">Bikes</a></li>
          
          @guest
            <li class="nav-item"><a class="nav-link btn btn-primary text-white px-3 ml-lg-3" href="{{ route('login') }}">Login</a></li>
          @else
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navDrop" data-toggle="dropdown">Hi, {{ Auth::user()->name }}</a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
              </div>
            </li>
          @endguest
        </ul>
      </div>
    </div>
</nav>

@yield('content')

<footer class="ftco-footer ftco-bg-dark ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <p>&copy; 2025 WheelzOn | All Rights Reserved</p>
      </div>
    </div>
  </div>
</footer>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>