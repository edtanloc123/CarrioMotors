<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\ChuyenBay;
use App\Models\Ve;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index()
    {
        $data = [
            'chuyenbay' => ChuyenBay::get()
        ];

        return view('layout/chuyenbay')->with($data);
    }
    public function update($macb)
    {
        $data = [
            'chuyenbay' => Chuyenbay::firstwhere('macb', $macb)
        ];
        return view('layout/update')->with($data);
    }
    public function save(Request $request)
    {
        $data = $request->post();
        print_r($data);
        unset($data['_token']);
        $data['ngaydi'] = DateTime::createFromFormat('d/m/Y', $data['ngaydi'])->format('Y-m-d');

        Chuyenbay::where('macb', $data['macb'])->update($data);
        return redirect('/demo/index');
    }
    public function add($id, Request $request)
    {
        if (isset($id)) {
            $data = [
                'msg' => $id
            ];
        }



        return view('layout/add')->with($data);
    }
    public function save1datve(Request $request)
    {
        $data = $request->post();
        if ($data['loaighe'] == 1) {
            $data['giaghe'] = 20;
        } else if ($data['loaighe'] == 2) {
            $data['giaghe'] = 15;
        }


        Ve::create($data);
        // print_r($data);
        return redirect('demo/ve');
    }

    public function datve(Request $request)
    {
        $value = $request->get('value');

        if ($value == 1) {
            $giaghe = 20;
        } else if ($value == 2) {
            $giaghe = 15;
        }
        return response()->json([
            'msg' => $giaghe
        ]);
    }
    public function ve()
    {

        $data = [
            've' => Ve::get()

        ];
        return view('layout/ve')->with($data);
    }
    public function delete($mave)
    {
        Ve::where('mave', $mave)->delete();
        return redirect('/demo/ve');
    }
}
