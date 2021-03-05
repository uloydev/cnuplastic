<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackValidation;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
   
    public function index()
    {
        $feedback = Feedback::paginate(10);
        return response()->json($feedback, 200);
    }

    public function store(FeedbackValidation $request)
    {

        $addMessage = Feedback::create($request->all());
        return response()->json([
            'message' => 'successfully send feedback',
            'data' => $addMessage
        ], 200);
    }

    public function show($id)
    {
        $feedback = Feedback::find($id);
        if ($feedback !== null) {
            $message = '';
            $jsonCode = 200;
        }
        else {
            $message = 'feedback not found';
            $jsonCode = 404;
        }
        return response()->json([
            'message' => $message,
            'data' => $feedback
        ], $jsonCode);
    }

   
    public function update(FeedbackValidation $request, $id)
    {
        $feedback = Feedback::where('id', $id);
        $feedback->update(['is_publish' => $request->is_publish]);
        
        return response()->json([
            'message' => 'successfully publish feedback',
            'data' => $feedback->first()
        ], 200);
    }

    
    public function destroy($id)
    {
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();
        return response()->json([
            'message' => 'message deleted',
        ], 202);
    }
}
