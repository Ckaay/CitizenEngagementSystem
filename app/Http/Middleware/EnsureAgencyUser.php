<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureAgencyUser
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->role === 'AgencyUser') {
            return $next($request);
        }
        abort(403, 'Unauthorized. Only agency users can access this page.');
    }
}