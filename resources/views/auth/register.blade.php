@extends('layouts.app')
@section('title', 'Register')

@section('content')
<style>
    /* Full Page Background with Overlay */
    .register-section {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('images/bg_1.jpg') no-repeat center center fixed;
        background-size: cover;
        min-height: 100vh; /* Full screen height */
        display: flex;
        align-items: center; /* Vertical Center */
        justify-content: center; /* Horizontal Center */
        padding: 20px;
    }

    /* Professional Register Card */
    .register-card {
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.3);
        padding: 40px;
        width: 100%;
        max-width: 450px; /* Card width fixed */
    }

    .register-card h2 {
        color: #F96D00;
        font-weight: 800;
        text-transform: uppercase;
        margin-bottom: 30px;
    }

    .form-control {
        height: 50px;
        border-radius: 10px;
        border: 1px solid #eee;
        background: #f9f9f9;
        margin-bottom: 15px;
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #F96D00;
        background: #fff;
    }

    /* Orange Button */
    .btn-register {
        background: #F96D00;
        color: #fff;
        font-weight: 700;
        height: 50px;
        border-radius: 10px;
        text-transform: uppercase;
        transition: 0.3s;
        border: none;
        width: 100%;
    }

    .btn-register:hover {
        background: #e06200;
        transform: translateY(-2px);
    }

    .login-link {
        color: #F96D00;
        font-weight: 600;
        text-decoration: none;
    }
</style>

<div class="register-section">
    <div class="register-card text-center">
        <h2>Register</h2>

        @if ($errors->any())
            <div class="alert alert-danger py-2">
                <ul class="mb-0 list-unstyled small">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" name="name" class="form-control" placeholder="Full Name" required>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
            
            <button type="submit" class="btn-register mt-3">Register</button>
        </form>

        <p class="mt-4 mb-0 text-muted">
            Already have an account? <a href="{{ route('login') }}" class="login-link">Login</a>
        </p>
    </div>
</div>
@endsection