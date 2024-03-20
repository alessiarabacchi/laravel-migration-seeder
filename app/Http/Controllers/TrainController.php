<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        $todayTrains = Train::where('departure_time', '>=', Carbon::today())->get();
        return view('home', compact('todayTrains'));
    }
}