<!-- @extends('layouts.app')
@section('title', 'Login')

@section('content')
<h2 class="text-center mb-4">Login</h2>

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

<p class="text-center mt-3">Don't have an account? <a href="{{ route('register') }}" class="text-warning">Register</a></p>
@endsection -->
