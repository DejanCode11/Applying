<?php

namespace App\Http\Controllers;

use App\Models\feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    
    public function feedback(){
        $feedbacks = Feedback::all();
        return view('feedback',[
            'feedbacks' => $feedbacks
        ]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'feedback' => 'required',
        ]);

        $feedback = new Feedback;
        $feedback->name = $request->input('name');
        $feedback->email = $request->input('email');
        $feedback->feedback = $request->input('feedback');
        $feedback->save();
        return redirect()->route('home.feedback');
    }
    // public function destroy(Feedback $feedback){
    //     $feedback->delete();
    //     return back();
    // }
}
