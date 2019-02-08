<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class Customer
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
        if(!Auth::check()){
            return redirect('/login');
        }else if( Auth::user()->role !== "customer"){
            return redirect('/login');
        }
        return $next($request);
    }
}
