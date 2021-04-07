<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Promote;

class SellerController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view('seller.dashboard')->with([
            'user' => $user,
            'productTotal' => Product::where('user_id', $user->id)->count(),
            'promoteTotal' => Promote::where('user_id', $user->id)->count(),
        ]);
    }
}
