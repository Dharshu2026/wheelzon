@extends('layouts.app')
@section('title', 'Login')

@section('content')

<style>
    
    body {
        background: #111;
    }

    .login-container {
        max-width: 420px;
        margin: 60px auto;
        background: #1c1c1c;
        padding: 40px 30px;
        border-radius: 15px;
        box-shadow: 0 0 18px rgba(255, 100, 0, 0.2);
        color: #fff;
    }

    .login-container h2 {
        font-weight: 600;
        color: #ff7300;
    }

    .form-control {
        background: #2a2a2a;
        color: white;
        border: 1px solid #444;
        height: 48px;
    }

    .form-control:focus {
        background: #333;
        color: #fff;
        border-color: #ff7300;
        box-shadow: 0 0 10px rgba(255, 115, 0, 0.5);
    }

    .btn-orange {
        background: #ff7300;
        color: white;
        border-radius: 8px;
        height: 45px;
        font-weight: 600;
        border: none;
    }

    .btn-orange:hover {
        background: #ff8c1a;
        color: #fff;
    }

    a.text-warning:hover {
        color: #ffae42 !important;
    }
</style>

<div class="login-container">

    <h2 class="text-center mb-4">LOGIN</h2>

    @if ($errors->any())
      <div class="alert alert-danger">
          <ul class="mb-0">
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
      @csrf

      <div class="mb-3">
        <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
      </div>

      <div class="mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
      </div>

      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" name="remember" id="remember">
        <label class="form-check-label" for="remember">Remember Me</label>
      </div>

      <button type="submit" class="btn btn-orange w-100">Login</button>

    </form>

    <p class="text-center mt-3">
        Don't have an account?  
        <a href="{{ route('register') }}" class="text-warning">Register</a>
    </p>
</div>


@endsection
