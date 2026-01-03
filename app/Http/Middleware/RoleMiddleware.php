<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        // Check if user is authenticated and has the required role
        // This leverages the HasTyroRoles trait on the User model
        if (!$request->user() || !$request->user()->hasRole($role)) {
            abort(403, "Unauthorized. Only users with the '{$role}' role can access this area.");
        }

        return $next($request);
    }
}
