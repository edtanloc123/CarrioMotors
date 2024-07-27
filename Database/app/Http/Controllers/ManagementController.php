<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\oto;
use App\Models\photo;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function index()
    {
        // $data = [
        //     'brand' => brand::get()
        // ];
        return view('management/index');
    }
    public function data()
    {
        $data = [
            'oto' => oto::get()
        ];
        return view('management/data')->with($data);
    }
    public function photo()
    {
        $data = [
            'photo' => photo::get()
        ];
        return view('management/photo')->with($data);
    }

    public function searchByName(Request $request)
    {
        $keyword = $request->get('keyword');
        return response()->json(
            [
                'oto' => oto::where('name', 'like', '%' . $keyword . '%')->get()
            ]
        );
        
    }
}
