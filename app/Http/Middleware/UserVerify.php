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
        $pathArray = explode('/', $request->getPathInfo());
        if($pathArray[1] == "posts") {
            if(!Auth::check() || \App\Post::find($pathArray[2])->user->id != auth()->user()->id) {
                return redirect('/');
            }
            return $next($request); 
        }
        if(!Auth::check() || auth()->user()->id != $pathArray[2]) {
            return redirect('/');
        }
        return $next($request);
    }
}
