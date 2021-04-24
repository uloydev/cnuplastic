<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqGeneral = Faq::where('category', 'general')->get();
        $faqSeller = Faq::where('category', 'seller')->get();
        $faqBuyer = Faq::where('category', 'buyer')->get();
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

    public function destroy()
    {
        # code...
    }

    public function update()
    {
        # code...
    }
}
