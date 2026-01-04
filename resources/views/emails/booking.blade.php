<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Bike Booking - WheelzOn</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #2c3e50; line-height: 1.6; background-color: #f4f7f6; padding: 20px;">
    <div style="max-width: 600px; margin: auto; background: white; padding: 20px; border-radius: 8px; border-top: 5px solid #007bff; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        
        <h2 style="color: #007bff; text-align: center;">🚲 New Bike Booking Received!</h2>
        <p>Hi Admin, you have a new booking request from <strong>WheelzOn</strong>.</p>
        
        <div style="background: #000000ff; padding: 20px; border-radius: 8px; border-left: 4px solid #007bff;">
            <p style="margin: 10px 0;"><strong>Name:</strong> <span style="color: #333;">{{ $booking->name }}</span></p>
            <p style="margin: 10px 0;"><strong>Email:</strong> <span style="color: #333;">{{ $booking->email }}</span></p>
            <p style="margin: 10px 0;"><strong>Phone:</strong> <span style="color: #333;">{{ $booking->phone }}</span></p>
            <p style="margin: 10px 0;"><strong>Bike:</strong> <span style="color: #007bff; font-weight: bold;">{{ $booking->bike }}</span></p>
            <p style="margin: 10px 0;"><strong>Pickup Date:</strong> {{ $booking->pickup_date }}</p>
            <p style="margin: 10px 0;"><strong>Return Date:</strong> {{ $booking->return_date }}</p>
        </div>

        @if(!empty($booking->notes))
            <div style="margin-top: 15px; padding: 10px; background: #fff3cd; border-radius: 5px;">
                <strong>Notes:</strong> {{ $booking->notes }}
            </div>
        @endif

        <hr style="border: 0; border-top: 1px solid #eee; margin: 20px 0;">
        <p style="font-size: 12px; color: #7f8c8d; text-align: center;">This message was sent automatically from the WheelzOn Booking System.</p>
    </div>
</body>
</html>