<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Order;
use App\Models\OrderDetail;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class CheckoutController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $total = 0;
        $cart = Cart::content();

        foreach ($cart as $product) {
            $total += $product->price * $product->qty;
        }

        $address = Address::where('user', Auth::id())->first();

        return view('checkout')
            ->with('cart', $cart)
            ->with('total', $total)
            ->with('address', $address);
    }

    public function send(Request $request)
    {
        $cart = Cart::content();
        $total = 0;

        foreach ($cart as $product) {
            $total += $product->price * $product->qty;
        }

        $order = new Order();
        $order->reference = str_random(10);
        $order->total = $total;
        $order->user = Auth::id();
        $order->save();

        foreach ($cart as $product) {
            $orderDetail = new OrderDetail();
            $orderDetail->quantity = $product->qty;
            $orderDetail->sub_total = $product->price * $product->qty;
            $orderDetail->product = $product->id;
            $orderDetail->order = $order->id;
            $orderDetail->save();
        }

        $title = $request->input('title');
        $content = $request->input('content');

        Mail::send('email.send', ['title' => $title, 'content' => $content], function ($message) {
            $message->to(Auth::user()->email);

        });

        Session::flash('alert-success', 'Votre commande a été validé');

        Cart::destroy();

        return redirect('/');
    }
}
