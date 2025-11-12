<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Bike Booking - WheelzOn</title>
</head>
<body style="font-family: Arial, sans-serif; color: #333;">
<h2>🚲 New Bike Booking Received!</h2>

<p><strong>Name:</strong> {{ $booking->name }}</p>
<p><strong>Email:</strong> {{ $booking->email }}</p>
<p><strong>Phone:</strong> {{ $booking->phone }}</p>
<p><strong>Bike:</strong> {{ $booking->bike }}</p>
<p><strong>Pickup Date:</strong> {{ $booking->pickup_date }}</p>
<p><strong>Return Date:</strong> {{ $booking->return_date }}</p>

@if(!empty($booking->notes))
    <p><strong>Notes:</strong> {{ $booking->notes }}</p>
@endif

<hr>
<p>This message was sent automatically from WheelzOn.</p>

    
</body>
</html>
