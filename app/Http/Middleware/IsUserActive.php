<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class IsUserActive
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->status == 1) {
            Session::put('error',null);
        }
        else if ($request->user()->status == 0) {
            Session::put('error',"No tienes permisos para acceder.");
            Auth::logout();
            return redirect('/login');
        }
        return $next($request);
    }
}
