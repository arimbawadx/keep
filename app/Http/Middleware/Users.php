<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Users
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
        // check session
        if (!session()->has('dataLoginUsers')) {
            return redirect('/');
        }else{
            return $next($request);
        }
    }
}
