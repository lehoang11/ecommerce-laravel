<?php

namespace App\Http\Middleware\Backend;

use Closure;
use Auth;

class Base
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
        if(Laralum::checkInstalled()) {
            # Check if the user is activated
            if(Auth::check()) {

            } else {

            }
        }

        return $next($request);
    }
}
