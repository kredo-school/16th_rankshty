<?php

use Illuminate\Support\Facades\Auth;
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

//Home Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');


//Seller Routes
Route::get('/seller/guide', [SellerController::class, 'guide'])->name('seller.guide');
Route::get('/seller/my-page', [SellerController::class, 'myPage'])->name('seller.myPage');

//Buyer Routes
Route::get('/buyer/my-page', [BuyerController::class, 'myPage'])->name('buyer.myPage');
Route::get('/buyer/reviewpage', [BuyerController::class, 'reviewPage'])->name('buyer.reviewPage');
Route::get('/buyer/service', [BuyerController::class, 'service'])->name('seller.service');
Route::get('/buyer/contact', [BuyerController::class, 'contact'])->name('buyer.contact');
Route::get('/buyer/help', [BuyerController::class, 'help'])->name('buyer.help');
//FollowBlock
Route::get('/buyer/followblock', [App\Http\Controllers\Buyer\FollowBlockController::class, 'index'])->name('buyer.followblock');


//Admin Routes
//Content Management
Route::get('/admin/contentmanagement', [AdminController::class, 'contentManagement'])->name('admin.contentmanagement');
Route::get('/admin/contentmanagement/details', [AdminController::class, 'contentManagementDetails'])->name('admin.contentmanagementdetails');
//Notifications
Route::get('/admin/notification', [NotificationsController::class, 'index'])->name('admin.notifications');
//User Management
Route::get('/admin/usermanagement', [UsersController::class, 'index'])->name('admin.users');
//FollowerFolloingList
Route::get('/admin/followerfollowinglist', [FollowerFollowingListController::class, 'index'])->name('admin.followerfollowinglist');

