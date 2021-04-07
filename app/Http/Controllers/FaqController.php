<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public $headers, $faqs;
    public function __construct()
    {
        $this->faqs = Faq::all();

        $this->headers = [
            [
                'url' => route('faq.general'),
                'text' => 'General'
            ],
            [
                'url' => route('faq.seller'),
                'text' => 'Seller'
            ],
            [
                'url' => route('faq.buyer'),
                'text' => 'Buyer'
            ],
        ];
    }
    public function index()
    {
        $headers = $this->headers;
        $faqs = Faq::where('category', 'general')->get();
        return view('faq.index', get_defined_vars());
    }

    public function seller()
    {
        $headers = $this->headers;
        $faqs = Faq::where('category', 'seller')->get();

        return view('faq.index', get_defined_vars());
    }

    public function buyer()
    {
        $headers = $this->headers;
        $faqs = Faq::where('category', 'buyer')->get();

        return view('faq.index', get_defined_vars());
    }
}
