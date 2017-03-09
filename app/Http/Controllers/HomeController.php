<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('type', '<>', 1)->paginate(8);
        return view('home')
            ->with('products',$products);
    }

    public function add($ean)
    {
        $product = Product::where('ean', $ean)->first();
        Cart::add($product->id, $product->name, 1, $product->price, ['image' => $product->image])->associate('Product');
        Session::flash('alert-success', "Le produit a été ajouté au panier");

        return redirect('/');

    }

    public function update() {

    }
}