<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class FrontLogin_middleware
{
    
    public function handle($request, Closure $next)
    {
        if(empty(Session::has('frontSession'))){
            return redirect('/login_page');
        }
        return $next($request);
    }
}
