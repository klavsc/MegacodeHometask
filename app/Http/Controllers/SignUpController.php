<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SignUp;

class SignUpController extends Controller
{

    public function signUp()
    {
        return view('signUp');
    }

    public function signUpPost(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email'
        ]);

        SignUp::create($request->all());

        return back()->with('success', 'Thanks for contacting us!');
    }
}
