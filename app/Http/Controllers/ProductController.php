<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function calculator(Request $request)
    {
        $product = $request->product;
        $price = $request->price;
        $discountPercent = $request->discountPercent;
        $result = $price * $discountPercent * 0.01;
        $newPrice = $price - $result;
        return view('result', compact('product', 'price', 'discountPercent', 'result', 'newPrice'));
    }
}
