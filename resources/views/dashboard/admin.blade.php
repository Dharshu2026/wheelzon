<!-- @extends('layouts.app')

@section('content')
<div class="container mt-5">
  <h2 class="mb-4 text-center text-warning">🚲 Admin Dashboard - WheelzOn</h2>
  <table class="table table-bordered table-dark table-hover text-center">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Bike</th>
        <th>Pickup</th>
        <th>Dropoff</th>
        <th>Date</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      @foreach($bookings as $b)
      <tr>
        <td>{{ $b->id }}</td>
        <td>{{ $b->name }}</td>
        <td>{{ $b->bike }}</td>
        <td>{{ $b->pickup_location }}</td>
        <td>{{ $b->dropoff_location }}</td>
        <td>{{ $b->pickup_date }} → {{ $b->return_date }}</td>
        <td>{{ $b->email }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection -->
