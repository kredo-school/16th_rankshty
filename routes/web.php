<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\AdminController;

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

Route::get('/buyer/index', [BuyerController::class, 'index'])->name('index');

Route::get('/buyer/reviews', [BuyerController::class, 'show'])->name('reviews');

Route::get('/seller/index', [SellerController::class, 'index'])->name('index');

Route::get('/admin/contentmanagement', [AdminController::class, 'contentManagement'])->name('admin.contentmanagement');

Route::get('/admin/contentmanagementdetails', [AdminController::class, 'contentManagementDetails'])->name('admin.contentmanagementdetails');


