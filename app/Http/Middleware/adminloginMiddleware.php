<?php

namespace App\Http\Middleware;

use Closure;

class adminloginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   

        if(!session('master'))
        {
            return redirect('/admin/login')->with(['info'=>'尚未登录']);
        }
        

        if($request->auth <= 1)
        {
            return redirect('/admin/login')->with(['info'=>'没有权限']);
        }
        return $next($request);
    }
}
