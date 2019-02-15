<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Discount extends Controller
{
    function amount(Request $request){
        $product = $request->product;
        $list = $request->list;
        $discount = $request->discount;
        $discount_amount = $list * $discount * 0.1;
        $price = $discount_amount - $list;
        return view('display', compact('discount_amount' , 'list', 'discount', 'price', 'product'));
    }
}
