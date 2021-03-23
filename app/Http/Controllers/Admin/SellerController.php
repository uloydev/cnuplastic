<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.seller.index')->with([
            'sellers' => User::where('role', 'seller')->get(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(User $seller)
    {
        if ($seller->role != 'seller') {
            abort(404);
        }
        return view('admin.seller.show')->with([
            'seller' => $seller
        ]);
    }
}
