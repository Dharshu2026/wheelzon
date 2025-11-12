@extends('layouts.app')

@section('title', 'Book Ride')

@section('content')
<div class="booking-wrapper container-fluid py-5 px-4">
  <h2 class="text-center text-white mb-5 fw-bold">Book Your Ride</h2>

  @if(session('success'))
    <div class="alert alert-success text-center">{{ session('success') }}</div>
  @endif

  <form method="POST" action="{{ route('book.store') }}" class="glass-form mx-auto p-4 rounded-4 shadow-lg">
    @csrf
    <div class="row g-4">

      <div class="col-md-6">
        <label class="form-label text-light">Name</label>
        <input type="text" name="name" class="form-control" required>
      </div>

      <div class="col-md-6">
        <label class="form-label text-light">Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>

      <div class="col-md-6">
        <label class="form-label text-light">Phone</label>
        <input type="text" name="phone" class="form-control" required>
      </div>

      <div class="col-md-6">
        <label class="form-label text-light">Select Bike</label>
        <select name="bike" class="form-control" required>
          <option value="">Choose a bike</option>
          @foreach ($bikes ?? [] as $bike)
            <option value="{{ $bike->name }}">{{ $bike->name }}</option>
          @endforeach
        </select>
      </div>

      <div class="col-md-6">
        <label class="form-label text-light">Pickup Location</label>
        <select name="pickup_location" class="form-control" required>
          <option value="">Select Pickup Area</option>
          <option value="Madurai" selected>Madurai</option>
          <option value="Trichy">Trichy</option>
          <option value="Coimbatore">Coimbatore</option>
          <option value="Chennai">Chennai</option>
        </select>
      </div>

      <div class="col-md-6">
        <label class="form-label text-light">Drop-off Location</label>
        <select name="dropoff_location" class="form-control" required>
          <option value="">Select Drop Area</option>
          <option value="Madurai">Madurai</option>
          <option value="Trichy" selected>Trichy</option>
          <option value="Coimbatore">Coimbatore</option>
          <option value="Chennai">Chennai</option>
        </select>
      </div>

      <div class="col-md-6">
        <label class="form-label text-light">Pickup Date</label>
        <input type="date" name="pickup_date" class="form-control"
              value="{{ date('Y-m-d') }}" required>
      </div>

      <div class="col-md-6">
        <label class="form-label text-light">Return Date</label>
        <input type="date" name="return_date" class="form-control"
              value="{{ date('Y-m-d', strtotime('+1 day')) }}" required>
      </div>

      <div class="col-12">
        <label class="form-label text-light">Notes</label>
        <textarea name="notes" class="form-control" rows="3"></textarea>
      </div>

    </div>

    <button class="btn btn-orange w-100 mt-4 py-2 fw-semibold rounded-pill">Confirm Booking</button>
  </form>
</div>

<style>
.booking-wrapper {
  width: 100%;
  min-height: 100vh;
}

.glass-form {
  max-width: 800px;
  background: rgba(255, 255, 255, 0.15);
  backdrop-filter: blur(20px);
  border: 1px solid rgba(255, 255, 255, 0.3);
}

.form-control {
  background: rgba(255, 255, 255, 0.15);
  border: none;
  color: #fff;
}

.form-control::placeholder {
  color: #eee;
}

label {
  font-weight: 500;
}

.btn-orange {
  background: #F96D00;
  color: #fff;
  border: none;
  transition: 0.3s;
}

.btn-orange:hover {
  background: #ff7f20;
  box-shadow: 0 0 12px #F96D00;
}
</style>
@endsection
