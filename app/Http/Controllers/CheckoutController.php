<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class CheckoutController extends Controller
{
    public function index(){
        return view('checkout');
    }

    public function send(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        Mail::send('email.send', ['title' => $title, 'content' => $content], function ($message)
        {
            $message->to(Auth::user()->email);

        });

        Session::flash('alert-success','Email sent successfully');

        return redirect('/');
    }
}
