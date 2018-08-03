<?php

namespace App\Http\Middleware;

use App\Utility;
use Closure;
use Hamcrest\Util;

class RoleMiddleware
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

      //  Utility::r($request);
       // Utility::r($next);
        return redirect('/');

        return $next($request);
    }
}
