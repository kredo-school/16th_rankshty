<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuyerController;

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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
    

Route::get('/buyer/my-page', [BuyerController::class, 'index'])->name('buyers.index');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
