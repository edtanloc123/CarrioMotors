<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    // http://localhost:8000/admin/login/
    // http://localhost:8000/admin/catetory/
    /* 
    middleware kiểm tra nếu người dùng chưa đăng nhập mà truy cập vào trang admin 
    thì sẽ điều hướng người dùng về lại trang đăng nhập
    */
    public function handle(Request $request, Closure $next)
    {
        // nếu chưa có session thì đẩy về trang login
        if (!$request->session()->has('email_admin')) {
            return redirect('/admin/login/index');
        }
        return $next($request);
    }
}