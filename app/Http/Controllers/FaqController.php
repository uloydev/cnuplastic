<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public $headers;
    public function __construct()
    {
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
        return view('faq.general', ['headers' => $headers]);
    }

    public function seller()
    {
        $headers = $this->headers;
        return view('faq.seller', ['headers' => $headers]);
    }

    public function buyer()
    {
        $headers = $this->headers;
        return view('faq.buyer', ['headers' => $headers]);
    }
}
