<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function handle( $request, Closure $next, ...$guards)
    {
       

        if (!Auth::guard($guards)->check()) {
            return  redirect()->route('backend.Signin');
        }
        $user = Auth::user();//lấy thông tinuser
    //   dd($user->getRoles());
      $route = $request->route()->getName();// kieemr tra quyền người dùng
     
        if($user->cant($route)){
            return redirect()->route('error',['code'=>403]);
        }
        return $next($request);
    }
}
