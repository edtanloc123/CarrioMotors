<?php

namespace App\Http\Controllers;

use App\Models\oto;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data = [
            'otoname' => oto::get()
        ];
        return view('/login/index')->with($data);
    }
    public function addnewcar()
    {
        $data = [
            'otoname' => oto::get()
        ];
        return view('action/viewaddnewcar')->with($data);
    }

    public function editcar($id)
    {
        $data = [
            'oto' => oto::firstwhere('id', $id),
            'otoname' => oto::get()
        ];
        return view('action/vieweditcar')->with($data);
    }
    public function saveaddnewcar(Request $request)
    {
        $data = $request->post();
        oto::create($data);
        return redirect('admin/action/addnewcar');
    }
    public function savedeletecar($id)
    {
        oto::where('id', $id)->delete();
        return redirect('/admin/management/data');
    }
    public function saveeditcar(Request $request)
    {
        $data = $request->post();
        unset($data['_token']);
        oto::where('id', $data['id'])->update($data);
        return redirect('/admin/management/data');
    }
    public function adminindex(Request $request)
    {
        $data = [
            'otoname' => oto::get()
        ];
        return view('/action/index')->with($data);
    }
}
