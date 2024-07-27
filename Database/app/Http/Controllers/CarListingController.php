<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\oto;
use App\Models\segment;

class CarListingController extends Controller
{
    public function index()
    {
        $data = [
            'otoname' => oto::get(),
            'brand' => brand::get(),
            'segment' => segment::get()
        ];
        return view('carlisting/index')->with($data);
    }
    public function segment($id)
    {
        $data = [
            'otoname' => oto::where('segmentid', $id)->get(),
            'brand' => brand::get(),
            'segment' => segment::get()
        ];
        return view('carlisting/index')->with($data);
    }
}
