<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;

class CustomerMiddleWare
{
    public function handle(Request $request, Closure $next)
    {
        // kiểm tra nếu chưa đăng nhập
        if (!Auth::guard('cus')->check()) {
            // chuyển hướng về form đăng nhập
            return redirect()->route('cus.Login');
        }elseif(Auth::guard('cus')->user()->status == 0){
            Auth::guard('cus')->logout();
            return redirect()->route('cus.Login')->with('no','Tài khoản của bạn chưa được kích hoạt');
        }
        return $next($request);
    }
}


