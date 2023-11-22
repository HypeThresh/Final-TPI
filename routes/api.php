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
