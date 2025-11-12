<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>WheelzOn | @yield('title')</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />

  <style>
    body {
      background: #0d0d0d;
      color: #fff;
      min-height: 100vh;
      margin: 0;
      font-family: 'Poppins', sans-serif;
    }

    nav.navbar {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
    }

    footer {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(8px);
      color: #ccc;
      padding: 15px;
      text-align: center;
      font-size: 14px;
    }
  </style>
</head>
<body>

  {{-- Navbar (optional) --}}
  <nav class="navbar navbar-expand-lg navbar-dark px-4">
    <a class="navbar-brand fw-bold text-warning" href="#">WheelzOn</a>
  </nav>

  <main>
    @yield('content')
  </main>

  <footer>
    © {{ date('Y') }} WheelzOn. All Rights Reserved.
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
