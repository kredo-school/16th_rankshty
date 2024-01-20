<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\AdminController;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/buyer/index', [BuyerController::class, 'index'])->name('index');

Route::get('/buyer/reviews', [BuyerController::class, 'show'])->name('reviews');

Route::get('/seller/index', [SellerController::class, 'index'])->name('index');

Route::get('/admin/contentmanagement', [AdminController::class, 'contentManagement'])->name('admin.contentmanagement');

Route::get('/admin/contentmanagementdetails', [AdminController::class, 'contentManagementDetails'])->name('admin.contentmanagementdetails');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Buyer Routes
//FollowBlock
Route::get('buyer/followblock', [App\Http\Controllers\Buyer\FollowBlockController::class, 'index'])->name('followblock');

//Admin Routes
//Notifications
Route::get('admin/notification', [NotificationsController::class, 'index'])->name('notifications');
//User Management
Route::get('admin/usermanagement', [UsersController::class, 'index'])->name('users');
//FollowerFolloingList
Route::get('admin/followerfollowinglist', [FollowerFollowingListController::class, 'index'])->name('followerfollowinglist');

