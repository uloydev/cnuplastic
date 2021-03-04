<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Promote;
use App\Models\Merchandise;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('admin.dashboard')->with([
            'totalSeller' => User::where('role', 'seller')->count(),
            'totalProduct' => Product::count(),
            'totalRequest' => Promote::count(),
            'totalMerch' => Merchandise::count(),
            'recentProducts' => Product::latest()->take(5)->get()
        ]);
    }

    public function loginView()
    {
        return view('admin.login');
    }
}