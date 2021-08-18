<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReservationRequest;
use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        $data = 'Nc';
        return view('welcome', compact('rooms', 'data'));
    }

    public function store(StoreReservationRequest $request)
    {
        $data = $request->validated();
        // do something with data here

        $rooms = Room::all();
        return view('welcome', compact('rooms', 'data'));
    }
}
