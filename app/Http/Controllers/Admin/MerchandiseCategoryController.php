<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MerchandiseCategory;
use App\Models\Merchandise;
use App\Http\Requests\MerchandiseCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class MerchandiseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.merchandise-category.index')->with(['categories' => MerchandiseCategory::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.merchandise-category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MerchandiseCategoryRequest $request)
    {
        $category = MerchandiseCategory::create($request->validated());
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/img/merchandise-category');
            $category->update(['image' => $path]);
        }
        return redirect()->route('admin.merchandise-category.create')->with([
            'success' => 'Berhasil Menambahkan Kategori Merchandise!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MerchandiseCategory  $merchandiseCategory
     * @return \Illuminate\Http\Response
     */
    public function show(MerchandiseCategory $merchandiseCategory)
    {
        return view('admin.merchandise-category.show')->with([
            'category' => $merchandiseCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MerchandiseCategory  $merchandiseCategory
     * @return \Illuminate\Http\Response
     */
    public function update(MerchandiseCategoryRequest $request, MerchandiseCategory $merchandiseCategory)
    {
        $merchandiseCategory->update($request->validated());
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/img/merchandise-category');
            Storage::delete($merchandiseCategory->image);
            $merchandiseCategory->update(['image' => $path]);
        }
        return redirect()->route('admin.merchandise-category.show', $merchandiseCategory->id)->with([
            'success' => 'Berhasil Memperbarui Kategori Merchandise!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MerchandiseCategory  $merchandiseCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(MerchandiseCategory $merchandiseCategory)
    {
        Storage::delete($merchandiseCategory->image);
        foreach ($merchandiseCategory->merchandises as $merch) {
            Storage::delete($merch->image);
            $merch->delete();
        }
        $merchandiseCategory->delete();
        return redirect()->route('admin.merchandise-category.index')->with(['success' => 'Berhasil Menghapus Kategori Merchandise!']);
    }
}
