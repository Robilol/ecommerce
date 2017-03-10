<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($ean)
    {
        $product = Product::where('ean', $ean)->first();
        $children = Product::where('parent', $product->id)->get();
        $size = [];

        foreach ($children as $child) {
            $size[$child->ean] = $child->name;
        }

        return view('product')
            ->with('product', $product)
            ->with('size', $size);
    }

    public function add (Request $request) {
        $ean = $request->input('size');
        $product = Product::where('ean', $ean)->first();
        Cart::add($product->id, $product->name, 1, $product->price, ['image' => $product->image])->associate('Product');

        return redirect('/');
    }
}
