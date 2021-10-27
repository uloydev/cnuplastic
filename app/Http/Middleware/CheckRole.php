<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if ($role == 'admin') {
            if (auth()->check() and auth()->user()->is_admin) {
                return $next($request);
            }
        } elseif ($role == 'user') {
            if (auth()->check() and ! auth()->user()->is_admin) {
                return $next($request);
            }
        }
        
        return redirect()->route('login');
    }
}
