<?php

namespace App\Http\Controllers;

use App\Models\brand;

class ServiceController extends Controller
{
    public function index()
    {
        $data = [
            'brand' => brand::get()
        ];
        return view('service/index')->with($data);
    }
}
