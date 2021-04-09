<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackValidation;
use App\Models\Feedback;
use App\Mail\FeedbackMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    
    public function index()
    {
        return view('admin.feedback.index')->with(['feedback' => Feedback::all()]);
    }

    public function store(FeedbackValidation $request)
    {

        Feedback::create($request->all());
        return redirect('/#section-kontak')->with([
            'success' => 'successfully send feedback'
        ]);
    }

    public function show(Feedback $feedback)
    {
        return view('admin.feedback.show')->with(['feedback' => $feedback]);
    }

    public function update(Request $request, Feedback $feedback)
    {
        $feedback->update($request->only(['answer']));
        Mail::to($feedback->email)->send(new FeedbackMail($feedback));
        return redirect()->route('admin.feedback.show', $feedback->id)->with(['success' => 'Sukses membalas feedback!']);
    }
}
