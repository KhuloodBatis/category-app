<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Product $product)
    {

        // dd($product);

        //return view('product.show', compact('product'));


        //$products = $product->categorys()->orderBy('created_at', 'desc')->paginate(1);
        return view('product.show', compact('product'));
    }
}
