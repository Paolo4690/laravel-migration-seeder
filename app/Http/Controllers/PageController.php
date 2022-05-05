<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::where('departure_time', 'like', '2022-05-05%')->get();
        return view('home', compact('trains'));
    }
}
