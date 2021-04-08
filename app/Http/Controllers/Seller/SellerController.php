<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
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

    public function accountSetting()
    {
        return view('seller.account-setting')->with(['user' => Auth::user()]);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'nullable|string|min:8',
            'whatsapp' => 'required|string',
            'store' => 'required|string',
            'store_description' => 'nullable|string',
            'avatar' => 'nullable|file|mimes:jpg,jpeg,gif,png|max:2048'
        ]);

        $user = Auth::user();
        $user->update($request->only(['name', 'whatsapp', 'store', 'store_description']));
        if ($request->password) {
            $user->update([
                'password' => Hash::make($validated['password'])
            ]);
        }
        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('public/img/avatar');
            Storage::delete($user->avatar);
            $user->update(['avatar' => $path]);
        }
        return redirect()->route('seller.account-setting')->with([
            'success' => 'Berhasil Memperbarui Akun!'
        ]);
    }

    public function accountVerification()
    {
        return view('seller.account-verification')->with(['user' => Auth::user()]);
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
