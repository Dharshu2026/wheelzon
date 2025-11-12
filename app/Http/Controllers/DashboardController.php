<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\Bike;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBikes = Bike::count();
        $totalBookings = Booking::count();
        $totalMessages = Contact::count();

        return view('dashboard', compact('totalBikes', 'totalBookings', 'totalMessages'));
    }
}
