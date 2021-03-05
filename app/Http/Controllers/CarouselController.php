<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carousels = Carousel::latest()->get();
        return response()->json($carousels);
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
        $request->validate([
            'path_img' => 'required|file|mimes:jpg,png,webp'
        ]);

        $path = $request->file('path_img')->store('public/files');
        $carousel = Carousel::create(['path_img' => $path]);
        return response()->json($carousel);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carousel = Carousel::findOrFail($id);
        return response()->json(['data' => $carousel]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'path_img' => 'required|file|mimes:jpg,png,webp'
        ]);

        $carousel = Carousel::where('id', $id)->update([
            'path_img' => $request->file('path_img')->store('public/files')
        ]);
        return response()->json([
            'message' => 'carousel updated',
            'data' => $carousel
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carousel = Carousel::find($id);
        $carousel->delete();

        return response()->json([
            'message' => $carousel->path_img . ' deleted',
            'data' => $carousel
        ]);
    }
}
