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
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Buyer\FollowBlockController;




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

//Ranking Routes
Route::get('/ranking/bestseller', [HomeController::class, 'ranking'])->name('ranking.bestseller');
Route::get('/ranking/review', [HomeController::class, 'ranking'])->name('ranking.review');
Route::get('/ranking/favorite', [HomeController::class, 'ranking'])->name('ranking.favorite');

//Seller Routes
Route::get('/seller/guide', [SellerController::class, 'guide'])->name('seller.guide');
Route::get('/seller/my-page', [SellerController::class, 'myPage'])->name('seller.myPage');
Route::get('/seller/product-registry', [SellerController::class, 'productRegistry'])->name('seller.produtRegisty');
Route::get('/seller/draftlist', [SellerController::class, 'draftlist'])->name('seller.draftlist');
Route::get('/seller/productslist', [SellerController::class, 'productsList'])->name('seller.productslist');
Route::get('/seller/ranking', [SellerController::class, 'ranking'])->name('seller.ranking');
Route::get('/seller/report', [SellerController::class, 'report'])->name('seller.report');

//Buyer Routes
Route::get('/buyer/my-page', [BuyerController::class, 'myPage'])->name('buyer.myPage');
Route::get('/buyer/reviews-page', [BuyerController::class, 'reviewsPage'])->name('buyer.reviewsPage');
Route::get('/buyer/service', [BuyerController::class, 'service'])->name('seller.service');
Route::get('/buyer/help', [BuyerController::class, 'help'])->name('buyer.help');
Route::get('/buyer/service', [BuyerController::class, 'service'])->name('buyer.service');
Route::get('/buyer/contact', [BuyerController::class, 'contact'])->name('buyer.contact');
Route::get('/buyer/returnproducts', [BuyerController::class, 'returnProducts'])->name('buyer.returnproducts');
Route::get('/buyer/cart', [BuyerController::class, 'cart'])->name('buyer.cart');
Route::get('/buyer/watchlist', [BuyerController::class, 'watchlist'])->name('buyer.watchlist');
Route::get('/buyer/favorite', [BuyerController::class, 'favorite'])->name('buyer.favorite');

//FollowBlock
Route::get('/buyer/followblock', [FollowBlockController::class, 'index'])->name('buyer.followblock');
Route::get('/buyer/report', [BuyerController::class, 'report'])->name('buyer.report');
Route::get('/buyer/favorite', [BuyerController::class, 'favorite'])->name('buyer.favorite');
Route::get('/buyer/checkout', [BuyerController::class, 'checkout'])->name('buyer.checkout');
Route::get('/buyer/checkoutconfirm', [BuyerController::class, 'checkoutConfirm'])->name('buyer.checkout_confirm');
Route::get('/buyer/checkoutcomplete', [BuyerController::class, 'checkoutComplete'])->name('buyer.checkout_complete');


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
//Ranking
Route::get('/admin/ranking', [AdminController::class, 'ranking'])->name('admin.ranking');
//Dashboard
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
//Category
Route::get('/admin/category', [AdminController::class, 'category'])->name('admin.category');
//Complainhandling
Route::get('/admin/complainhandling', [AdminController::class, 'complainhandling'])->name('admin.complainhandling');
Route::get('/admin/complaindetail', [AdminController::class, 'complaindetail'])->name('admin.complaindetail');


