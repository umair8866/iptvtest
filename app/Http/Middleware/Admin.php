<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Admin
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
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        if (Auth::check() &&  Auth::User()->role == 2) {
            // return redirect()->route('video');
            // return redirect('/');
            return $next($request);
        }

        if (Auth::check() &&  Auth::User()->role == 1) {
            // return redirect()->route('admin');
            return $next($request);
        }
      
    }
}
