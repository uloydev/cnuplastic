<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Promote;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('admin.dashboard')->with([
            'totalProduct' => Product::count(),
            'totalRequest' => Promote::count(),
            'recentProducts' => Product::latest()->take(5)->get()
        ]);
    }

    public function loginView()
    {
        return view('admin.login');
    }

    public function login(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();
        if (Auth::user()->role != 'admin') {
            Auth::logout();
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
            return redirect()->back();
        }
        return redirect()->route('admin.dashboard');
    }
}