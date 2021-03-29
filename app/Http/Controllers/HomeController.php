<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Merchandise;
use App\Models\MerchandiseCategory;

class HomeController extends Controller
{
    public function index() 
    {
        return view('main.index');
    }

    public function faq() 
    {
        return view('main.faq.index');
    }

    public function products() 
    {
        return view('main.products');
    }

    public function merchandise() 
    {
        return view('main.merchandise');
    }
    
    public function about() 
    {
        return view('main.about');
    }
}
