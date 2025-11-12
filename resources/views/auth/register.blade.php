<!-- @extends('layouts.app')
@section('title', 'Register')

@section('content')
<h2 class="text-center mb-4">Register</h2>

@if ($errors->any())
  <div class="alert alert-danger">
      <ul class="mb-0">
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif

<form method="POST" action="{{ route('register') }}">
  @csrf
  <div class="mb-3">
    <input type="text" name="name" class="form-control" placeholder="Full Name" required>
  </div>
  <div class="mb-3">
    <input type="email" name="email" class="form-control" placeholder="Email" required>
  </div>
  <div class="mb-3">
    <input type="password" name="password" class="form-control" placeholder="Password" required>
  </div>
  <div class="mb-3">
    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
  </div>
  <button type="submit" class="btn btn-orange w-100">Register</button>
</form>

<p class="text-center mt-3">Already have an account? <a href="{{ route('login') }}" class="text-warning">Login</a></p>
@endsection -->
