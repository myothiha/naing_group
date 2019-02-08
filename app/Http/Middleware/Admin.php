<?php

namespace App\Http\Middleware;
use Closure;
use Auth;   
// use Illuminate\Auth\Middleware\Authenticate as Middleware;


class Admin  
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function handle($request, Closure $next)
    { 
        if(!Auth::check()){

                return redirect('/login');
            }else if(Auth::user()->role !== "admin"){
                return redirect('/login');
         }

        return $next($request);
    }
}
