<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bike;
use App\Models\Booking;

class BookingController extends Controller
{
    public function create(Request $request)
    {
        $bikes = Bike::all(); // fetch all bikes

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
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'bike_id' => 'required|exists:bikes,id',
            'pickup_location' => 'required|string',
            'dropoff_location' => 'required|string',
            'pickup_date' => 'required|date',
            'return_date' => 'required|date|after_or_equal:pickup_date',
        ]);

        Booking::create($request->all());

        return redirect()->back()->with('success', 'Ride booked successfully!');
    }
}
