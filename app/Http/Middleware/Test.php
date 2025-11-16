<?php

namespace App\Http\Middleware;

use Closure;

class Test
{
    public function handle($request, Closure $next)
    {
        return response("Middleware Test funcionando");
        // return $next($request);
    }
}
