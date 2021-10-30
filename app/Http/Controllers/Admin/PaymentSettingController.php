<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentSetting;
use Illuminate\Http\Request;

class PaymentSettingController extends Controller
{
    public function index()
    {
        $paymentSetting = PaymentSetting::first();
        return view('admin.payment.index', compact('paymentSetting'));
    }

    public function update(Request $request)
    {
        PaymentSetting::first()->update([
            'number' => $request->number,
            'holder_name' =>$request->holder_name,
            'bank' => strtoupper($request->bank)
        ]);

        return redirect()->back()->with('success', 'Successfully update payment setting');
    }
}
