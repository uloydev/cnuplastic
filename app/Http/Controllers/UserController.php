<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserValidation;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private function orderQuery($status)
    {
        return Order::where('user_id', Auth::id())->where('status', $status);
    }

    private function isCorrectOrder($order)
    {
        return $order->user_id == Auth::id();
    }

    public function dashboard()
    {
        return view('user.dashboard')->with([
            'unpaidOrder' => $this->orderQuery('unpaid')->count(),
            'paidOrder' => $this->orderQuery('paid')->count(),
            'successOrder' => $this->orderQuery('finished')->count(),
        ]);
    }

    public function accountSetting()
    {
        return view('user.account-setting');
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

        return redirect()->route('user.account-setting')->with([
            'success' => 'Berhasil Memperbarui Akun!',
        ]);
    }

    // public function statusVerification()
    // {
    //     $verificationStatus = Auth::user()->verification_status;
    //     if ($verificationStatus == 'not_verified' or $verificationStatus == 'rejected') {
    //         return view('user.fill-verification', compact('verificationStatus'));
    //     }
    //     else {
    //         return view('user.info-verified', compact('verificationStatus'));
    //     }
    // }

    // public function storeVerification(Request $request)
    // {
    //     $request->validate([
    //         'identity_card' => 'required|file|mimes:jpg,jpeg,gif,png|max:2048'
    //     ]);
    //     $user = Auth::user();
    //     if ($request->hasFile('identity_card')) {
    //         $path = $request->file('identity_card')->store('public/img/identity_card');
    //         Storage::delete($user->identity_card);
    //         $user->update([
    //             'identity_card' => $path,
    //             'verification_status' => 'requested'
    //         ]);
    //     }
    //     return redirect()->route('user.account-verification')->with([
    //         'success' => 'Berhasil Membuat request verifikasi Akun!'
    //     ]);
    // }

    public function unpaidOrder()
    {
        return view('user.order.index', [
            'title' => "Unpaid Order",
            'orders' => $this->orderQuery('unpaid')->get(),
        ]);
    }

    public function paidOrder()
    {
        return view('user.order.index', [
            'title' => "Paid Order",
            'orders' => $this->orderQuery('paid')->get(),
        ]);
    }

    public function orderSuccess()
    {
        return view('user.order.index', [
            'title' => "OrderSuccess",
            'orders' => $this->orderQuery('finished')->get(),
        ]);
    }

    public function orderDetail(Order $order)
    {
        if ($this->isCorrectOrder($order)) {
            return view('user.order.show', [
                'order' => $order,
            ]);
        }
        abort(404, 'order not found');
    }

    public function orderDestroy(Order $order)
    {
        if ($this->isCorrectOrder($order) and $order->status == 'unpaid') {
            $order->delete();
            return redirect()->route('user.order.unpaid');
        }
        abort(404, 'order not found');
    }

    public function paymentPage(Order $order)
    {
        if ($this->isCorrectOrder($order) and $order->status == 'unpaid') {
            return view('user.order.pay', [
                'order' => $order,
            ]);
        }
        abort(404, 'order not found');
    }

    public function payOrder(Request $request, Order $order)
    {
        if ($this->isCorrectOrder($order)) {
            if ($request->hasFile('payment')) {
                $order->update([
                    'payment' => $request->file('payment')->store('public/payment'),
                    'status' => 'paid',
                ]);
                return redirect()->route('user.order.paid');
            }
            return redirect()->back();
        }
        abort(404, 'order not found');
    }

    public function placeOrder(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $order = Order::create([
            'product_name' => $product->name,
            'product_price' => $product->price,
            'quantity' => $request->quantity,
            'product_id' => $product->id,
            'user_id' => Auth::id(),
            'price_total' => $product->price * $request->quantity,
        ]);
        return redirect()->route('user.order.pay', $order->id);
    }
}
