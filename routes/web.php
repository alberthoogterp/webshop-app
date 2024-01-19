<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect("home");
});
Route::get("/home", [HomeController::class, "home"])->name("homepage");
Route::get("/category/{categoryname}/{subcategoryname}", [CategoryController::class, "categoryOverview"])->name("category");
Route::get("/category/{categoryname}/{subcategoryname}/{productId}", [ProductController::class, "productPage"])->name("product");
Route::post("/order", [ProductController::class, "buy"])->name("buy");
Route::get("/orderComplete", [ProductController::class, "orderComplete"])->name("ordercomplete");
Route::get("/login",[LoginController::class, "loginPage"])->name("loginpage");
Route::post("/login",[LoginController::class, "login"])->name("login");

Route::middleware("auth")->group(function(){
    Route::get("/account", [LoginController::class, "accountPage"])->middleware("cache.prevent")->name("account");
    Route::post("/Logout", [LoginController::class, "logout"])->name("logout");

});