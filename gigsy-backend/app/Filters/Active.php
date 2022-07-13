<?php

namespace App\Filters;

use Closure;

class Active
{
    public function handle($request, Closure $next)
    {
        if (!request()->has('status')) {
            return $next($request);
        }
        return $next($request)->where('status', 0);
    }
}
