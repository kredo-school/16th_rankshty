<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Buyer\BuyerController;
use App\Http\Controllers\Seller\SellerController;
use App\Http\Controllers\Admin\AdminController;
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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Seller Routes
Route::get('/sellers/guide', [SellerController::class, 'guide'])->name('guide');
Route::get('/seller/my-page', [SellerController::class, 'myPage'])->name('myPage');

//Buyer Routes
Route::get('/buyer/my-page', [BuyerController::class, 'myPage'])->name('myPage');
Route::get('/buyer/reviewpage', [BuyerController::class, 'reviewPage'])->name('reviewPage');

//FollowBlock
Route::get('buyer/followblock', [App\Http\Controllers\Buyer\FollowBlockController::class, 'index'])->name('followblock');

//Admin Routes
Route::get('/admin/contentmanagement', [AdminController::class, 'contentManagement'])->name('admin.contentmanagement');
Route::get('/admin/contentmanagement/details', [AdminController::class, 'contentManagementDetails'])->name('admin.contentmanagementdetails');

//Notifications
Route::get('admin/notification', [NotificationsController::class, 'index'])->name('notifications');

//User Management
Route::get('admin/usermanagement', [UsersController::class, 'index'])->name('users');

//FollowerFolloingList
Route::get('admin/followerfollowinglist', [FollowerFollowingListController::class, 'index'])->name('followerfollowinglist');

