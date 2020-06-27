<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class CustomerMiddleware
{
    private $cus;

    public function __construct()
    {
        
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'cus')
    {
        if(Auth::guard($guard)->check()){
            return $next($request);
        }
        return redirect()->route('indexWeb')->with('error','Bạn cần đăng nhập để vào trang thanh toán');
    }
}
