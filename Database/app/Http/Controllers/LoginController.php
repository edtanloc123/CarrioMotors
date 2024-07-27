<?php

namespace App\Http\Controllers;

use App\Models\account;
use App\Models\Account as ModelsAccount;
use App\Models\oto;
use App\Models\role_account;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('/admin/login/index');
    }

    public function login(Request $request)
    {
        $email = $request->post('email');
        $password = $request->post('password');
        $account = account::firstwhere('email', $email);
        if ($account == null) {
            $data = [
                'msg' => 'Email is not invalid'
            ];
            return view('login/index')->with($data);
        }
        // $role_account = role_account::firstwhere('accountid', $account->id);
        if ($account->email == $email && $account->password == $password) {
            $request->session()->put('email_admin', $email);
            if ($account->role == 1) {
                $data = [
                    'msg' => 'hello ' . $email,
                    'oto' => oto::get()
                ];
                return view('management/data')->with($data);
            } else {
                $data = [
                    'msg' => 'hello ' . $email,
                    'oto' => oto::get(),
                    'email' => $email,
                    'brand' => oto::get()
                ];
                return view('home/index')->with($data);
            }
        } else {
            $data = [
                'msg' => 'Email or password is incorrect'
            ];
            return view('login/index')->with($data);
        }
    }
    public function logout(Request $request)
    {
        $request->session()->forget('email_admin');
        return redirect('admin/login/index');
    }
}
