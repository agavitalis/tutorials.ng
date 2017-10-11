<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class TutorMiddleware

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

            if ( $typeOfUser !='tutor')
            {
                return redirect('/');        
            }
            else
            {
                return $next($request);
            }
    }
}
