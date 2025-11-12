<!-- @extends('layouts.app')

@section('content')
<div class="container mt-5">
  <h2 class="mb-4 text-center text-warning">👤 My Bookings</h2>

  @if($bookings->count())
  <table class="table table-bordered table-dark text-center">
    <thead>
      <tr>
        <th>Bike</th>
        <th>Pickup</th>
        <th>Dropoff</th>
        <th>Dates</th>
      </tr>
    </thead>
    <tbody>
      @foreach($bookings as $b)
      <tr>
        <td>{{ $b->bike }}</td>
        <td>{{ $b->pickup_location }}</td>
        <td>{{ $b->dropoff_location }}</td>
        <td>{{ $b->pickup_date }} → {{ $b->return_date }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @else
  <p class="text-center text-muted">No bookings found.</p>
  @endif
</div>
@endsection -->
