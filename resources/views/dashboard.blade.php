@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<style>
    body {
        background: linear-gradient(135deg, #1a1a2e, #16213e, #0f3460);
        color: white;
        font-family: 'Poppins', sans-serif;
    }

    .glass-card {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: all 0.3s ease;
    }

    .glass-card:hover {
        transform: translateY(-5px);
        background: rgba(255, 255, 255, 0.2);
    }

    h2, h4 {
        font-weight: 600;
    }

    .btn-custom {
        border-radius: 30px;
        padding: 10px 25px;
        font-weight: 500;
        transition: 0.3s;
    }

    .btn-custom:hover {
        transform: scale(1.05);
    }

    .dashboard-title {
        font-size: 2.3rem;
        font-weight: 700;
        text-shadow: 0px 0px 10px rgba(255,255,255,0.4);
    }

    .icon {
        font-size: 45px;
        margin-bottom: 10px;
    }
</style>

<div class="container mt-5 text-center">
    <h2 class="dashboard-title mb-4">✨ Admin Dashboard ✨</h2>

    <div class="row justify-content-center">
        <div class="col-md-3 m-3 glass-card p-4">
            <div class="icon">🚲</div>
            <h4>Total Bikes</h4>
            <h2>{{ $totalBikes ?? 0 }}</h2>
        </div>

        <div class="col-md-3 m-3 glass-card p-4">
            <div class="icon">📅</div>
            <h4>Total Bookings</h4>
            <h2>{{ $totalBookings ?? 0 }}</h2>
        </div>

        <div class="col-md-3 m-3 glass-card p-4">
            <div class="icon">✉️</div>
            <h4>Messages Received</h4>
            <h2>{{ $totalMessages ?? 0 }}</h2>
        </div>
    </div>

    <div class="mt-5">
        <a href="{{ route('bikes') }}" class="btn btn-primary btn-custom me-2">View Bikes</a>
        <a href="{{ route('book') }}" class="btn btn-success btn-custom me-2">View Bookings</a>
        <a href="{{ route('contact') }}" class="btn btn-info btn-custom">View Messages</a>
    </div>
</div>
@endsection
