<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Bike; // 👈 add this line
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
   
public function create()
{
    $today = date('Y-m-d');
    $tomorrow = date('Y-m-d', strtotime('+1 day'));
    $bikes = Bike::all();

    return view('book', [
        'pickup_default' => 'Madurai',
        'dropoff_default' => 'Trichy',
        'pickup_date' => $today,
        'return_date' => $tomorrow,
        'bikes' => $bikes,
    ]);
}


    // Store booking details
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'bike' => 'required',
            'pickup_location' => 'required',
            'dropoff_location' => 'required',
            'pickup_date' => 'required|date',
            'return_date' => 'required|date|after_or_equal:pickup_date',
            'pickup_time' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        // Save booking
        Booking::create($data);

        // Send email
        try {
            Mail::send('emails.booking', ['booking' => (object) $data], function ($message) use ($data) {
                $message->to('dharshdharsh1020@gmail.com')
                        ->subject('🚲 New Bike Booking - WheelzOn');
            });

            return back()->with('success', 'Booking successful! Confirmation mail sent.');
        } catch (\Exception $e) {
            return back()->with('success', 'Booking saved, but mail not sent. Error: ' . $e->getMessage());
        }
    }
}
