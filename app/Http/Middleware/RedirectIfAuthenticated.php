<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? ['web', 'manager', 'provider'] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // Redirect based on the guard
                return match ($guard) {
                    'web' => redirect()->route('home'),
                    'manager' => redirect()->route('employee-panel.home'),
                    'provider' => redirect()->route('provider-panel.home'),
                    default => redirect()->route('home'),
                };
            }
        }

        return $next($request);
    }
}
