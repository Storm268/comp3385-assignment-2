<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    // Show the feedback form
    public function create()
    {
        return view('feedback-form');
    }

    // Handle form submission
    public function send(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string',
            'email' => 'required|email',
            'comment' => 'required|string',
        ]);
        return redirect('/feedback/success')->with('message', 'Feedback submitted successfully!');
    }
}
