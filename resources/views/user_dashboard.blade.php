@extends('layouts.app')

@section('content')
<div class="dashboard-container">

  <!-- Sidebar -->
  <aside class="glass-sidebar">
    <h3 class="mb-4 text-center">🚴‍♀️ WheelZon</h3>
    <ul class="sidebar-links">
      <li><a href="#profile" class="active">👤 Profile</a></li>
      <li><a href="#bookings">🗓 My Bookings</a></li>
      <li><a href="#messages">💬 Messages</a></li>
    </ul>
  </aside>

  <!-- Main Content -->
  <main class="glass-main">
    <section id="profile" class="section">
      <h3>👤 My Profile</h3>
      <hr>
      <p><strong>Name:</strong> {{ $user->name ?? 'Guest User' }}</p>
      <p><strong>Email:</strong> {{ $user->email ?? 'Not available' }}</p>
    </section>

    <section id="bookings" class="section">
      <h3>🗓 My Bookings</h3>
      <hr>
      <div class="table-responsive">
        <table class="table table-dark table-hover rounded">
          <thead>
            <tr>
              <th>#</th>
              <th>Bike</th>
              <th>Pickup Date</th>
              <th>Dropoff Date</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            @foreach($bookings as $index => $booking)
            <tr>
              <td>{{ $index + 1 }}</td>
              <td>{{ $booking->bike }}</td>
              <td>{{ $booking->pickup_date }}</td>
              <td>{{ $booking->dropoff_date }}</td>
              <td><span class="badge bg-success">Confirmed</span></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </section>

    <section id="messages" class="section">
      <h3>💬 My Messages</h3>
      <hr>
      <div class="table-responsive">
        <table class="table table-dark table-hover rounded">
          <thead>
            <tr>
              <th>#</th>
              <th>Subject</th>
              <th>Message</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            @foreach($messages as $index => $msg)
            <tr>
              <td>{{ $index + 1 }}</td>
              <td>{{ $msg->subject ?? 'N/A' }}</td>
              <td>{{ $msg->message ?? '—' }}</td>
              <td>{{ $msg->created_at ?? '-' }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </section>
  </main>
</div>
@endsection

<style>
/* Layout */
.dashboard-container {
  display: flex;
  min-height: 90vh;
  gap: 20px;
  padding: 30px;
  background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
  color: white;
}

/* Sidebar */
.glass-sidebar {
  width: 250px;
  background: rgba(255, 255, 255, 0.08);
  backdrop-filter: blur(15px);
  border-radius: 20px;
  padding: 30px 20px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.3);
}

.sidebar-links {
  list-style: none;
  padding: 0;
}

.sidebar-links li {
  margin: 15px 0;
}

.sidebar-links a {
  color: white;
  text-decoration: none;
  font-weight: 500;
  display: block;
  padding: 10px 15px;
  border-radius: 12px;
  transition: 0.3s;
}

.sidebar-links a:hover,
.sidebar-links a.active {
  background: rgba(255, 255, 255, 0.2);
  color: #00e5ff;
}

/* Main content */
.glass-main {
  flex: 1;
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(12px);
  border-radius: 20px;
  padding: 40px;
  box-shadow: 0 4px 25px rgba(0,0,0,0.3);
  overflow-y: auto;
}

/* Sections */
.section {
  margin-bottom: 40px;
}

hr {
  border: 1px solid rgba(255,255,255,0.3);
}

.table {
  color: white;
}

.table thead {
  background: rgba(255, 255, 255, 0.2);
}

.badge {
  border-radius: 10px;
}
</style>
