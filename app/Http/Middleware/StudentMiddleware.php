<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class StudentMiddleware
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
        $typeOfUser=Auth::user()->typeOfUser;
        
                    if ( $typeOfUser !='student')
                    {
                        return back()->with('error','Access Not Granted');        
                    }
                     else
                     {
                        return $next($request);
                     }
    }
}
