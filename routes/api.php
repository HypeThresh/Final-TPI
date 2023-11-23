<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Users
Route::get("/users", "App\Http\Controllers\UserController@index");
Route::post("/users", "App\Http\Controllers\UserController@store");
Route::get("/users/{user}", "App\Http\Controllers\UserController@show");
Route::put("/users/{user}", "App\Http\Controllers\UserController@update");
Route::delete("/users/{user}", "App\Http\Controllers\UserController@destroy");
//Products
Route::get("/products", "App\Http\Controllers\ProductController@index");
Route::post("/products", "App\Http\Controllers\ProductController@store");
Route::get("/products/{product}", "App\Http\Controllers\ProductController@show");
Route::put("/products/{product}", "App\Http\Controllers\ProductController@update");
Route::delete("/products/{product}", "App\Http\Controllers\ProductController@destroy");
//Purchases
Route::get("/purchases", "App\Http\Controllers\PurchaseController@index");
Route::post("/purchases", "App\Http\Controllers\PurchaseController@store");
Route::get("/purchases/{purchase}", "App\Http\Controllers\PurchaseController@show");
Route::put("/purchases/{purchase}", "App\Http\Controllers\PurchaseController@update");
Route::delete("/purchases/{purchase}", "App\Http\Controllers\PurchaseController@destroy");
/*category*/
Route::get("/categories", "App\Http\Controllers\CategoryController@index");
Route::post("/categories", "App\Http\Controllers\CategoryController@store");
Route::get("/categories/{category}", "App\Http\Controllers\CategoryController@show");
Route::put("/categories/{category}", "App\Http\Controllers\CategoryController@update");
Route::delete("/categories/{category}", "App\Http\Controllers\CategoryController@destroy");
/*payment*/
Route::get("/payment", "App\Http\Controllers\PaymentController@index");
Route::post("/payment", "App\Http\Controllers\PaymentController@store");
Route::get("/payment/{payment}", "App\Http\Controllers\PaymentController@show");
Route::put("/payment/{payment}", "App\Http\Controllers\PaymentController@update");
Route::delete("/payment/{payment}", "App\Http\Controllers\PaymentController@destroy");
/*supplier*/
Route::get("/supplier", "App\Http\Controllers\SupplierController@index");
Route::post("/supplier", "App\Http\Controllers\SupplierController@store");
Route::get("/supplier/{supplier}", "App\Http\Controllers\SupplierController@show");
Route::put("/supplier/{supplier}", "App\Http\Controllers\SupplierController@update");
Route::delete("/supplier/{supplier}", "App\Http\Controllers\SupplierController@destroy");

Route::get("/wishlist", "App\Http\Controllers\WishlistController@index");
Route::post("/wishlist", "App\Http\Controllers\WishlistController@store");
Route::get("/wishlist/{wishlist}", "App\Http\Controllers\WishlistController@show");
Route::put("/wishlist/{wishlist}", "App\Http\Controllers\WishlistController@update");
Route::delete("/wishlist/{wishlist}", "App\Http\Controllers\WishlistController@destroy");

Route::get("/discount", "App\Http\Controllers\DiscountController@index");
Route::post("/discount", "App\Http\Controllers\DiscountController@store");
Route::get("/discount/{discount}", "App\Http\Controllers\DiscountController@show");
Route::put("/discount/{discount}", "App\Http\Controllers\DiscountController@update");
Route::delete("/discount/{discount}", "App\Http\Controllers\DiscountController@destroy");

Route::post("/users/discount", "App\Http\Controllers\UserController@attach");//ready
Route::post("/users/wishlist", "App\Http\Controllers\UserController@attachWishlist");//ready
Route::post("/users/purchase", "App\Http\Controllers\UserController@attachPurchase");//ready
Route::post("/users/payment", "App\Http\Controllers\UserController@attachPayment");//ready
Route::post("/wishlist/product", "App\Http\Controllers\WishlistController@attachWishlist");//ready
Route::post("/purchase/product", "App\Http\Controllers\PurchaseController@attach");//ready
Route::post("/purchase/payment", "App\Http\Controllers\PurchaseController@attachPayment");//ready
Route::post("/products/category", "App\Http\Controllers\ProductController@attachCategory");//ready
Route::post("/products/supplier", "App\Http\Controllers\ProductController@attachSupplier");//ready

