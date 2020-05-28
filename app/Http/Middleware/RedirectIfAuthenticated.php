<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;
use SweetAlert;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        //if (Auth::guard($guard)->check()) {
          //  return redirect(RouteServiceProvider::HOME);
        //}
        
        if(Auth::guard('admin')->check()){
            
            return redirect('/admin/index');
        }else if(Auth::guard('pengguna')->check()){

            return redirect('/pengguna/index');
        }
        return $next($request);
    }
}
