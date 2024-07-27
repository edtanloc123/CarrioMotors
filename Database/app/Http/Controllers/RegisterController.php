<?php

namespace App\Http\Controllers;

use App\Models\account;
use App\Models\role_account;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register/index');
    }
    public function register(Request $request)
    {
        $data = $request->post();

        // $role_account = [
        //     'roleid' => 2,
        //     'accountid' => $data['id']
        // ];
        account::create($data);
        // role_account::create($role_account);
        $msg = [
            'msg' => 'Tạo tài khoản thành công! Xin mời đăng nhập.',
            'email' => $data['email']
        ];
        return view('login/index')->with($msg);
    }
}
