<?php

namespace App\Http\Controllers;

use App\Models\brand;

class AboutusController extends Controller
{
    public function index()
    {
        $data = [
            'brand' => brand::get()
        ];
        return view('aboutus/index')->with($data);
    }
}
