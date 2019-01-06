<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeToPm2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    /**
     * Show the first page of th App.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('show');
    }

    /**
     * Sends a Welcome Email.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // Validate request.
        $this->validate($request, [
            'email' => ['required', 'email']
        ]);

        // Send Email.
        Mail::send(new WelcomeToPm2($request->email));

        // Go back to Home Page with Message.
        return redirect()->route('home')->with(['status' => 'Email was sent! Check your inbox']);
    }
}
