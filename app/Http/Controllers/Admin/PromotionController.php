<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Promote;
use Illuminate\Http\Request;

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
        //
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
