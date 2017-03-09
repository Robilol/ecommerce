<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class EmailController extends Controller
{
    public function send(Request $request)
    {

        $title = $request->input('title');
        $content = $request->input('content');

        Mail::send('email.send', ['title' => $title, 'content' => $content], function ($message)
        {
            $message->to(Auth::email());

        });

        Session::flash('alert-success','Email sent successfully');

        return redirect('/');
    }
}
