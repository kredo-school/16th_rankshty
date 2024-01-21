<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\NotificationsController;
use App\Http\Controllers\Admin\FollowerFollowingListController;


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

    

Route::get('/buyer/my-page', [BuyerController::class, 'index'])->name('buyers.index');



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Buyer Routes
//FollowBlock
Route::get('buyer/followblock', [App\Http\Controllers\Buyer\FollowBlockController::class, 'index'])->name('buyer.followblock');

//Admin Routes
//Notifications
Route::get('admin/notification', [NotificationsController::class, 'index'])->name('admin.notifications');
//User Management
Route::get('admin/usermanagement', [UsersController::class, 'index'])->name('admin.users');
//FollowerFolloingList
Route::get('admin/followerfollowinglist', [FollowerFollowingListController::class, 'index'])->name('admin.followerfollowinglist');
