<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Feedback;

class FeedbackController extends Controller {

    public function index() {
        return view('feedback/index');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'username' => 'required|max:45',
            'email' => 'required|max:60',
            'theme' => 'required',
            'message' => 'required'
        ]);

        $feedback = new Feedback();
        $feedback->fill($request->all());
        $feedback->save();
        $result = true;
        return redirect('/');
    }

}
