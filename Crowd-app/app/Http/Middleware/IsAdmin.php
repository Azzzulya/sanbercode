<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle($request, Closure $next)
    // {
    //     if(Auth::user() && Auth::user()->role_id == 'bbf93bea-37ce-4dae-b997-0134b19dfd95'){
    //         return $next($request);
    //     }
    //     // return $next($request);
    //     return redirect('/');
    // }
}
