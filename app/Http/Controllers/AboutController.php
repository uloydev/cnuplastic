<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = [
            (object) [
                'icon' => 'image/security.png',
                'slogan' => 'Secure'
            ],
            (object) [
                'icon' => 'image/tap.png',
                'slogan' => 'Easy To use'
            ],
            (object) [
                'icon' => 'image/browser.png',
                'slogan' => 'Free Register'
            ],
            (object) [
                'icon' => 'image/promotion.png',
                'slogan' => 'Request Promotion'
            ],
        ];
        return view('main.about', get_defined_vars());
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
     * Update or create new about info
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        About::updateOrCreate(
            ['id' => 1],
            ['logo' => request('logo'), 'excerpt' => request('excerpt')]
        );
        return redirect()->back()->with('success', 'Berhasil mengganti info');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    
}
