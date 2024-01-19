<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryOverview(string $categoryname, string $subcategoryname){
        $products = product::wherehas("subcategories",function($query) use ($subcategoryname){
            $query->where("name", $subcategoryname);
        })->get();
        return view("categoryOverview", ["category"=>$categoryname,"subcategory"=>$subcategoryname,"products"=>$products]);
    }
}
