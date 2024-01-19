<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\user;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productPage(Request $request){
        $product = product::find($request->route("productId"));
        if($product){
            return view("productPage",["product"=>$product]);
        }
        return redirect()->back();
    }

    public function buy(Request $request){
        $productId = $request->input("productId");
        if($productId != null){
            $user = User::find(auth()->user()->id);
            $user->products()->attach($productId);
            return redirect()->route("ordercomplete");
        }
        else{
            return redirect()->route("ordercomplete");
        }
    }
}
