<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
   
    public function index()
    {
        $contactUs = ContactUs::paginate(10);
        return response()->json($contactUs, 200);
    }

    public function store(Request $request)
    {
        $addMessage = ContactUs::create($request->all());
        return response()->json([
            'message' => 'successfully send feedback',
            'data' => $addMessage
        ], 200);
    }

    public function show($id)
    {
        $feedback = ContactUs::find($id);
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

   
    public function update(Request $request, $id)
    {
        $contactUs = ContactUs::where('id', $id);
        $contactUs->update(['is_publish' => $request->is_publish]);
        
        return response()->json([
            'message' => 'successfully publish feedback',
            'data' => $contactUs->first()
        ], 200);
    }

    
    public function destroy($id)
    {
        $feedback = ContactUs::findOrFail($id);
        $feedback->delete();
        return response()->json([
            'message' => 'message deleted',
        ], 202);
    }
}
