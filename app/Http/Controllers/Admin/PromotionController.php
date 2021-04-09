<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Promote;
use App\Mail\PromotionStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.promotion.index')->with([
            'promotions' => Promote::get()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Promote  $promotion
     * @return \Illuminate\Http\Response
     */
    public function show(Promote $promotion)
    {
        return view('admin.promotion.show')->with(['promotion' => $promotion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Promote  $promotion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promote $promotion)
    {
        $promotion->update($request->only('status'));
        Mail::to($promotion->user)->send(new PromotionStatus($promotion));
        return redirect()
        ->route('admin.promotion.show', $promotion->id)
        ->with([
            'success' => 'Berhasil update request promosi!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Promote  $promotion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promote $promotion)
    {
        //
    }
}
