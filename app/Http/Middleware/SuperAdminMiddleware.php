<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SuperAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * Check if the authenticated user has the 'super-admin' role.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->user() || !$request->user()->hasRole('super-admin')) {
            abort(403, 'Unauthorized. Only Super Admin can access this area.');
        }

        return $next($request);
    }
}
