<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginPage(){
        return view("loginPage");
    }

    public function accountPage(){
        if(Auth::check()){
            $userId = Auth::user()->id;
            $accountProducts = product::wherehas("users",function($query) use ($userId){
                $query->where("id",$userId);
            })->get();
            return view("account", ["accountproducts"=>$accountProducts]);
        }
        else{
            return redirect()->route("loginpage");
        }
    }

    public function login(Request $request){
        if(Auth::attempt(["username"=>$request->input("username"), "password"=>$request->input("password")])){
            return redirect()->route("homepage");
        }
        else{
            return redirect()->route("loginpage")->withErrors(["login"=>"Incorrect username or password"]);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route("loginpage");
    }
}
