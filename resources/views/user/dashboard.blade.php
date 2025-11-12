@extends('layouts.app')

@section('title', 'User Dashboard')

@section('content')
<style>
body {
    background: linear-gradient(135deg, #0a0f1b, #1a2238);
    color: #fff;
    font-family: 'Poppins', sans-serif;
    overflow-x: hidden;
}

.dashboard-container {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 120px 20px 60px;
}

.glass-card {
    background: rgba(255, 255, 255, 0.08);
    border: 1px solid rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(14px);
    border-radius: 20px;
    padding: 40px;
    width: 90%;
    max-width: 950px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.25);
    text-align: center;
}

.glass-card h1 {
    font-size: 2rem;
    margin-bottom: 10px;
    color: #fff;
    font-weight: 600;
}

.glass-card p {
    color: #b8b8b8;
    margin-bottom: 30px;
}

.stats {
    display: flex;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
    margin-bottom: 40px;
}

.stat-box {
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.15);
    border-radius: 16px;
    padding: 25px;
    width: 200px;
    transition: 0.3s;
}

.stat-box:hover {
    transform: translateY(-6px);
    background: rgba(255, 255, 255, 0.18);
}

.stat-box h2 {
    font-size: 2rem;
    color: #00d9ff;
    margin-bottom: 10px;
}

.stat-box p {
    font-size: 1rem;
    color: #ccc;
}

.action-btns {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 15px;
}

.action-btns a {
    background: linear-gradient(135deg, #00d9ff, #0077ff);
    padding: 12px 25px;
    border-radius: 10px;
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    transition: 0.3s;
}

.action-btns a:hover {
    background: linear-gradient(135deg, #0077ff, #00d9ff);
    transform: scale(1.05);
}

/* 🔹 Responsive Design */
@media (max-width: 768px) {
    .glass-card {
        padding: 25px 20px;
    }

    .glass-card h1 {
        font-size: 1.6rem;
    }

    .stat-box {
        width: 100%;
        max-width: 300px;
    }

    .stats {
        gap: 20px;
    }

    .action-btns a {
        padding: 10px 20px;
        font-size: 0.9rem;
    }
}
</style>

<div class="dashboard-container">
    <div class="glass-card">
        <h1>👋 Welcome Back, {{ Auth::user()->name ?? 'User' }}!</h1>
        <p>Here’s a quick overview of your activity</p>

        <div class="stats">
            <div class="stat-box">
                <h2>3</h2>
                <p>Bookings Made</p>
            </div>
            <div class="stat-box">
                <h2>1</h2>
                <p>Active Ride</p>
            </div>
            <div class="stat-box">
                <h2>2</h2>
                <p>Past Rides</p>
            </div>
        </div>

        <div class="action-btns">
            <a href="#">My Bookings</a>
            <a href="#">Edit Profile</a>
            <a href="#">Logout</a>
        </div>
    </div>
</div>
@endsection
