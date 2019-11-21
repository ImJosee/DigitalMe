<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth; 

class UserVerify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        $id = explode('/', $request->getPathInfo())[2];
        if(!Auth::check() || Auth::user()->id != $id) {
            return redirect('/');
        }
        return $next($request);
    }
}
