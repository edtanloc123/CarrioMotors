<?php

namespace App\Http\Controllers;

use App\Models\brand;

class ContactController extends Controller
{
    public function index()
    {
        $data = [
            'brand' => brand::get()
        ];
        return view('contact/index')->with($data);
    }
}
