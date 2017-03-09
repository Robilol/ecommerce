<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::content();
        $total = 0;

        foreach ($cart as $product) {
            $total += $product->price * $product->qty;
        }

        return view('cart')
            ->with('cart', $cart)
            ->with('total', $total);

    }
}
