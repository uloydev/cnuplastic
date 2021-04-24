<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Merchandise;
use App\Models\MerchandiseCategory;

class HomeController extends Controller
{
    public function index() 
    {
        $latestProduct = Product::latest()->limit(4)->get();
        $carousels = Carousel::all();
        return view('main.index', get_defined_vars());
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
