<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
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
=======

class CheckoutController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {

    }


>>>>>>> 8b61a2c8351216214181551e24ba85a00f877edb
}
