<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Promote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    private function checkProduct(Product $product)
    {
        if ($product->user_id != Auth::id()) {
            abort(403);
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product.index')->with([
            'products' => Product::latest()->get()
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
        return view('admin.product.show')->with([
            'product' => $product,
            'productCategories' => ProductCategory::all()
        ]);
    }

    public function create()
    {
        return view('admin.product.create')->with([
            'productCategories' => ProductCategory::all()
        ]);
    }

    public function store(ProductRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = Auth::id();
        $product = Product::create($validated);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/img/product');
            $product->update(['image' => $path]);
        }
        return redirect()->route('admin.product.index')->with([
            'success' => 'Berhasil Menambahkan Product!'
        ]);
    }

    public function update(Product $product, ProductRequest $request)
    {
        $this->checkProduct($product);

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

    public function bestSeller()
    {
        return view('admin.product.best-seller')->with([
            'bestSeller' => Product::where('is_promo', true)->get()
        ]);
    }

    public function promos()
    {
        return view('admin.product.promo')->with([
            'promos' => Product::where('is_promo', true)->get()
        ]);
    }

    public function markAs(Request $request , $id)
    {
        $product = Product::where('id', $id);

        $successMessage = '';

        // dd($request->all());

        if ($request->has('mark_as_best_seller')) {
            $product->update([
                'is_best_seller' => $request->mark_as_best_seller
            ]);

            $successMessage = $request->mark_as_best_seller ? 'mark product as best seller' : 'unmark product as best seller';;
        }

        if ($request->has('mark_as_promo')) {
            $product->update([
                'is_promo' => $request->mark_as_promo
            ]);

            $successMessage = $request->mark_as_best_seller ? 'mark product as promo' : 'unmark product as promo';
        }

        return redirect()->back()->with('success', "Succesfully  $successMessage");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Promote::where('product_id', $product->id)->delete();
        $product->delete();

        return redirect()->route('admin.product.index')->with(['success' => 'Berhasil Menghapus Produk!']);
    }
}
