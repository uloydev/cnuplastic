<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\AccountVerification;

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
            'users' => User::where('role', 'seller')->get(),
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
            'seller' => $seller,
        ]);
    }

    public function accountVerification()
    {
        return view('admin.account-verification.index')->with([
            'users' => User::where('role', 'seller')->where('verification_status', 'requested')->get(),
        ]);
    }

    public function accountVerificationShow(User $seller)
    {
        $this->checkRequestedVerification($seller);
        return view('admin.account-verification.show')->with([
            'seller' => $seller,
        ]);
    }

    public function accountVerificationUpdate(Request $request, User $seller)
    {
        $this->checkRequestedVerification($seller);
        if ($request->verification_status == 'verified' || $request->verification_status == 'rejected') {
            $seller->update($request->only('verification_status'));
            Mail::to($seller)->send(new AccountVerification($seller));
            return redirect()->route('admin.account-verification.index')->with([
                'success' => 'Sukses mengubah verification status menjadi ' . $request->verification_status,
            ]);
        }
        return redirect()->route('admin.account-verification.show', $seller->id)->with([
            'Error' => 'Gagal mengubah verification status',
        ]);
    }

    public function identityCardDownload(User $seller)
    {
        $this->checkRequestedVerification($seller);
        return Storage::download($seller->identity_card, 'identity_card_' . $seller->id . '.jpg', ['Content-Type' => 'image/png']);
    }

    private function checkRequestedVerification(User $seller) {
        if ($seller->verification_status != 'requested') {
            abort(404);
        }
    }
}
