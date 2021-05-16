<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\ProductController;

Route::get('/logout', function (){
	Session::forget('user');
	return redirect('/login');
});


Route::view("/login","login");
Route::post("login",[usercontroller::class,'login']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("/add_to_cart",[Productcontroller::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']);
Route::get("removeitem/{id}",[ProductController::class,'removeItem']);
Route::get("ordernow",[ProductController::class,'orderNow']);
Route::post("orderplace",[ProductController::class,'orderPlace']);