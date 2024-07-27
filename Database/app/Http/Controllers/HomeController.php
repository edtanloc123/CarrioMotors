<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\oto;
use App\Models\segment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'oto' => oto::get(),
            'brand' => brand::get(),
            'segment' => segment::get()
        ];
        return view('home/index')->with($data);
    }

    public function search(Request $request)
    {
        $keyword = $request->get('keyword');
        $value = $request->get('value');
        if ($value == 0 && $keyword == '') {
            $data = [
                'brand' => brand::get(),
                'otoname' => oto::get(),
                'segment' => segment::get()
            ];
            return view('carlisting/index')->with($data);
        } else if ($value == 0) {
            $data = [
                'brand' => brand::get(),
                'otoname' => oto::where('name', 'like', '%' . $keyword . '%')->get(),
                'segment' => segment::get()
            ];
            return view('carlisting/index')->with($data);
        } else if ($value !== 0 && $keyword == '') {
            $data = [
                'brand' => brand::get(),
                'otoname' => oto::where('brandid', $value)->get(),
                'segment' => segment::get()
            ];
            return view('carlisting/index')->with($data);
        } else {
            $data = [
                'brand' => brand::get(),
                'otoname' => oto::where('name', 'like', '%' . $keyword . '%')->where('brandid', $value)->get(),
                'segment' => segment::get()
            ];
            return view('carlisting/index')->with($data);
        }
    }
}
