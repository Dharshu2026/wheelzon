<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bike;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function create(Request $request)
    {
        $bikes = Bike::all();

        $pickupLocation = $request->pickup_location ?? '';
        $dropoffLocation = $request->drop_location ?? '';
        $pickupDate = $request->pickup_date ?? date('Y-m-d');
        $returnDate = $request->return_date ?? date('Y-m-d', strtotime('+1 day'));

        return view('book', compact(
            'bikes',
            'pickupLocation',
            'dropoffLocation',
            'pickupDate',
            'returnDate'
        ));
    }

    public function store(Request $request)
    {
        // Validate form (NO email – use logged in user)
        $validated = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'bike_id' => 'required|exists:bikes,id',
            'pickup_location' => 'required|string',
            'dropoff_location' => 'required|string',
            'pickup_date' => 'required|date',
            'return_date' => 'required|date|after_or_equal:pickup_date',
            'notes' => 'nullable|string',
        ]);

        // Save booking
        $booking = Booking::create([
            'name' => $validated['name'],
            'email' => auth()->user()->email,   // Logged in user's email
            'phone' => $validated['phone'],
            'bike' => $validated['bike_id'],
            'pickup_location' => $validated['pickup_location'],
            'dropoff_location' => $validated['dropoff_location'],
            'pickup_date' => $validated['pickup_date'],
            'return_date' => $validated['return_date'],
            'notes' => $validated['notes'],
        ]);

        // Send confirmation email
        Mail::raw(
            "Hi {$validated['name']},\n\nYour bike ride has been booked successfully 🚴‍♂️\n\n" .
            "Pickup: {$validated['pickup_location']}\n" .
            "Dropoff: {$validated['dropoff_location']}\n" .
            "Pickup Date: {$validated['pickup_date']}\n" .
            "Return Date: {$validated['return_date']}\n\n" .
            "Thank you for choosing Wheelzon!",
            function ($message) {
                $message->to(auth()->user()->email)
                        ->subject('Wheelzon – Ride Booking Confirmation');
            }
        );

        return redirect()->back()->with('success', 'Ride booked successfully! Check your email 📧');
    }
}
