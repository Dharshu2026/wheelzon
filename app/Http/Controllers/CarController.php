<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bike;

class CarController extends Controller
{
    public function index()
    {
        $bikes = Bike::all();
        return view('car', compact('bikes'));
    }
}
