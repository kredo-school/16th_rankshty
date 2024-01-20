<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReturnController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

#Buyer/return
Route::get('buyer/return', [ReturnController::class, 'return_products'])->name('return');

#Buyer/product
Route::get('buyer/product', [ProductController::class, 'products_detail'])->name('product');

#Buyer/cart
Route::get('buyer/cart/success', [CartController::class, 'cart_success'])->name('cart.success');
Route::get('buyer/cart/empty', [CartController::class, 'cart_empty'])->name('cart.empty');
Route::get('buyer/cart', [CartController::class, 'cart'])->name('cart');
Route::get('buyer/cart/checkout', [CartController::class, 'cart_checkout'])->name('cart.checkout');

#Seller
Route::get('seller/report', [ReportController::class, 'seller_report'])->name('report');
