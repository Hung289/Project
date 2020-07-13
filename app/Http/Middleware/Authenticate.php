<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    // protected function redirectTo($request)
    // {
    //     if (! $request->expectsJson()) {
    //         return route('getloginWeb');
    //     }
    // }
    public function handle($request, Closure $next)
    {
        if(!Auth::check()){//Chưa đăng nhập
            return redirect()->route('Login');
        }

        $user = Auth::User();//Lấy thông tin user khi đã đăng nhập
        //Kiểm tra quyền người dùng
        $route = $request->route()->getName();
        // dd($route);
        // dd($user->can($route));
        if($user->cant($route)){
            return redirect()->route('error',['code'=>403]);
        }

        return $next($request);
    }
}
