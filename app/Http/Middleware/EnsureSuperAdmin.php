<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureSuperAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->role === 'SuperUser') {
            return $next($request);
        }
        abort(403, 'Unauthorized. Only super admin can access this page.');
    }
}