<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Promote;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('seller.product.index')->with([
            'products' => Auth::user()->products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seller.product.create')->with([
            'productCategories' => ProductCategory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = Auth::id();
        $product = Product::create($validated);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/img/product');
            $product->update(['image' => $path]);
        }
        return redirect()->route('seller.product.create')->with([
            'success' => 'Berhasil Menambahkan Product!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('seller.product.show')->with([
            'product' => $product,
            'productCategories' => ProductCategory::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/img/product');
            Storage::delete($product->image);
            $product->update(['image' => $path]);
        }
        return redirect()->route('seller.product.show', $product->id)->with([
            'success' => 'Berhasil Memperbarui Product!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Storage::delete($product->image);
        foreach ( $product->promotions as $promote) {
            $promote->delete();
        }
        $product->delete();
        return redirect()->route('seller.product.index')->with(['success' => 'Berhasil Menghapus Product!']);
    }
}
