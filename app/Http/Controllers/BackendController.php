<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BackendController extends Controller
{
    public function index()
    {
        return view('backend');
    }
    public function addProduct(Request $request){
        $product = new Product;

        $product->ean = str_random(5);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = 'kebab.jpg';
        $product->type = 0;
        $product->parent = 0;

        $product->save();

        Session::flash('alert-success', "L'article a été mis en ligne");

        return redirect('/backend');
    }
}
