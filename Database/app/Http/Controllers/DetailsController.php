<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Models\oto;
use App\Models\photo;
use App\Models\segment;

class DetailsController extends Controller
{
    public function index($id)
    {
        $data = [
            'oto' => oto::find($id),
            'otoname' => oto::get(),
            'comments' => comment::where('otoid', $id)->orderBy('id', 'DESC')->take(3)->get(),
            'brand' => oto::get(),
            'photo' => photo::where('otoid', $id)->get(),
            'segment' => segment::get()
        ];
        return view('details/index')->with($data);
    }
}
