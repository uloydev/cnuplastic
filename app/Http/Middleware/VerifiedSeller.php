<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifiedSeller
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        if ($user->verification_status != 'verified') {
            return redirect()->route('seller.account-verification')->with(['error' => 'Akun Anda Belum Di Verifikasi']);
        }
        return $next($request);
    }
}
