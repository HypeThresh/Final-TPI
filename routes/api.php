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

Route::get("/users", "App\Http\Controllers\UserController@index");
Route::post("/users", "App\Http\Controllers\UserController@store");
Route::get("/users/{user}", "App\Http\Controllers\UserController@show");
Route::put("/users/{user}", "App\Http\Controllers\UserController@update");
Route::delete("/users/{user}", "App\Http\Controllers\UserController@destroy");

Route::get("/products", "App\Http\Controllers\ProductController@index");
Route::post("/products", "App\Http\Controllers\ProductController@store");
Route::get("/products/{product}", "App\Http\Controllers\ProductController@show");
Route::put("/products/{product}", "App\Http\Controllers\ProductController@update");
Route::delete("/products/{product}", "App\Http\Controllers\ProductController@destroy");

Route::get("/purchases", "App\Http\Controllers\PurchaseController@index");
Route::post("/purchases", "App\Http\Controllers\PurchaseController@store");
Route::get("/purchases/{purchase}", "App\Http\Controllers\PurchaseController@show");
Route::put("/purchases/{purchase}", "App\Http\Controllers\PurchaseController@update");
Route::delete("/purchases/{purchase}", "App\Http\Controllers\PurchaseController@destroy");

