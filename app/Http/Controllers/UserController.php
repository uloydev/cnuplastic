<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserValidation;
use App\Models\Product;
use App\Models\Promote;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function dashboard()
    {
        $verificationStatus = auth()->user()->verification_status;
        switch ($verificationStatus) {
            case 'rejected':
                $badgeClass = 'badge-danger';

            case 'not_verified':
                $badgeClass = 'badge-danger';
                break;

            case 'verified':
                $badgeClass = 'badge-success';
                
                break;

            case 'requested':
                $badgeClass = 'badge-info';
                    
                break;
        }
        $verificationStatus = Str::of($verificationStatus)->replace('_', ' ')->title();
        return view('seller.dashboard')->with([
            'badgeClass' => $badgeClass,
            'verificationStatus' => $verificationStatus,
            'productTotal' => Product::byUserId()->count(),
            'promoteTotal' => Promote::byUserId()->count(),
        ]);
    }

    public function accountSetting()
    {
        return view('seller.account-setting');
    }

    public function update(UserValidation $request)
    {
        $user = Auth::user();
        $user->update($request->only(['name', 'whatsapp', 'store', 'store_description']));
        if ($request->has('password')) {
            Auth::user()->update(['password' => Hash::make($request['password'])]);
        }
        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('public/img/avatar');
            Storage::delete(Auth::user()->avatar);

            Auth::user()->update(['avatar' => $path]);
        }

        return redirect()->route('seller.account-setting')->with([
            'success' => 'Berhasil Memperbarui Akun!'
        ]);
    }

    public function statusVerification()
    {
        $verificationStatus = Auth::user()->verification_status;
        if ($verificationStatus == 'not_verified' or $verificationStatus == 'rejected') {
            return view('seller.fill-verification', compact('verificationStatus'));
        }
        else {
            return view('seller.info-verified', compact('verificationStatus'));
        }
    }

    public function storeVerification(Request $request)
    {
        $request->validate([
            'identity_card' => 'required|file|mimes:jpg,jpeg,gif,png|max:2048'
        ]);
        $user = Auth::user();
        if ($request->hasFile('identity_card')) {
            $path = $request->file('identity_card')->store('public/img/identity_card');
            Storage::delete($user->identity_card);
            $user->update([
                'identity_card' => $path,
                'verification_status' => 'requested'
            ]);
        }
        return redirect()->route('seller.account-verification')->with([
            'success' => 'Berhasil Membuat request verifikasi Akun!'
        ]);
    }
}
