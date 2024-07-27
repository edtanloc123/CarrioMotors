<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\oto;

class CarBookingController extends Controller
{
    public function index($id)
    {
        $data = [
            'oto' => oto::find($id),
            'brand' => brand::get()
        ];
        return view('carbooking/index')->with($data);
    }
}
