<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class AdminMiddleware
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
        if (Auth::user()->usertype =='admin')
        
        {
         return $next($request);
        }
        else
        
        {
            // to re direct if the user not admin to public view 
         return redirect('/home')->with('status','You Are Not allowd To Admin Dashboard');  
       }
      
    }
}