<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product.category', ['categories' => ProductCategory::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ProductCategory::create([
            'name' => $request->name
        ]);

        return redirect()->back()->with('success', "Successfully add new category $request->name");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductCategory $productCategory, Request $request)
    {
        $productCategory->update([
            'name' => $request->name
        ]);

        return redirect()->back()->with('success', "Successfully update category $request->name");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productCategory = ProductCategory::findOrFail($id);
        $productCategory->products()->delete();
        $productCategory->delete();

        return redirect()->back()->with('success', "Successfully delete category with related product");
    }
}
