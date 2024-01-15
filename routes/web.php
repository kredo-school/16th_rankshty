<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\NotificationsController;

use App\Http\Controllers\PurchaseHistoryController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/purchase-history', 'PurchaseHistoryController@index');

Route::get('/purchase-history', [App\Http\Controllers\PurchaseHistoryController::class, 'index'])->name('purchase-history');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Notifications
Route::get('admin/notification', [NotificationsController::class, 'index'])->name('notifications');
//User Management
Route::get('admin/usermanagement', [UsersController::class, 'index'])->name('users');
