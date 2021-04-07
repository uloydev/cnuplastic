<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\PromoteRequest;
use App\Models\Promote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('seller.promotion.index')->with([
            'promotions' => Auth::user()->promotes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seller.promotion.create')->with([
            'products' => Auth::user()->products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PromoteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PromoteRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = Auth::id();
        Promote::create($validated);
        return redirect()->route('seller.promotion.create')->with([
            'success' => 'Berhasil Menambahkan Request Promotion!'
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
        $this->checkPromotion($promotion);
        return view('seller.promotion.show')->with(['promotion' => $promotion]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Promote  $promotion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promote $promotion)
    {
        $this->checkPromotion($promotion);
        $promotion->delete();

        return redirect()->route('seller.promotion.index')->with(['success' => 'Berhasil Menghapus Request Promotion!']);
    }

    private function checkPromotion(Promote $promotion)
    {
        if ($promotion->user_id != Auth::id()) {
            abort(403);
        }
    }
}
