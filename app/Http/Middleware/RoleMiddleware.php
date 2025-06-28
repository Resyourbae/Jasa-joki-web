<!-- Ini gw buat cuma buat test doang untuk berfungsi apa gak gw juga gak tau -->

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
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        $user = request()->user();
        if (!$user || !$user->hasRole($role)) {
            abort(403);
        }

        return $next($request);
    }
}
