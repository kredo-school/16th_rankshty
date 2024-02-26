<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Buyer\CartController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Buyer\BuyerController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\Seller\FollowerListController;
use App\Http\Controllers\Seller\SellerController;
use App\Http\Controllers\Admin\DashboardController;



use App\Http\Controllers\PurchaseHistoryController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Buyer\ConnectionController;
use App\Http\Controllers\Buyer\FollowBlockController;
use App\Http\Controllers\Admin\NotificationsController;
use App\Http\Controllers\Admin\FollowerFollowingListController;
use App\Http\Controllers\Buyer\FavoriteController;

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
Route::get('/ranking/bestseller', [ProductController::class, 'ranking'])->name('ranking.bestseller');
Route::get('/ranking/review', [ProductController::class, 'ranking'])->name('ranking.review');
Route::get('/ranking/favorite', [ProductController::class, 'ranking'])->name('ranking.favorite');
// Product Route
Route::get('/product/{id}/show', [ProductController::class, 'show'])->name('product');
// Categorize Route
Route::get('/categorize', [HomeController::class, 'categorize'])->name('categorize');
// Review Route
Route::get('/reviews', [HomeController::class, 'reviews'])->name('reviews');



//Seller Routes
Route::get('/guide', [SellerController::class, 'guide'])->name('seller.guide');
Route::get('/help', [SellerController::class, 'help'])->name('seller.help');
Route::get('/seller/my-page', [SellerController::class, 'myPage'])->name('seller.myPage');
Route::get('/seller/product-registry', [SellerController::class, 'productRegistry'])->name('seller.produtRegisty');
Route::get('/seller/draftlist', [ProductController::class, 'draftlist'])->name('seller.draftlist');
Route::get('/seller/productslist', [ProductController::class, 'index'])->name('seller.productslist');
Route::delete('/seller/productslist/{id}/delete', [ProductController::class, 'softDelete'])->name('seller.productslist.delete');
Route::get('/seller/ranking', [ProductController::class, 'sellersRanking'])->name('seller.ranking');
Route::get('/seller/report', [SellerController::class, 'report'])->name('seller.report');
Route::get('/seller/contact', [SellerController::class, 'contact'])->name('seller.contact');
Route::get('/seller/info', [App\Http\Controllers\InformationController::class, 'index'])->name('seller.info');
Route::get('/seller/follower-list', [FollowerListController::class, 'index'])->name('seller.follower-list');
Route::get('/seller/connection', [App\Http\Controllers\ConnectionController::class, 'index'])->name('seller.connection');
Route::get('/seller/ordermanagement/dashboard', [SellerController::class, 'orderManagementDashboard'])->name('seller.orderManagementDashboard');

//Buyer Routes
Route::get('/help/buyer', [BuyerController::class, 'help'])->name('buyer.help');
Route::get('/buyer/my-page', [BuyerController::class, 'myPage'])->name('buyer.myPage');
Route::get('/buyer/reviews-page', [BuyerController::class, 'reviewsPage'])->name('buyer.reviewsPage');
Route::get('/buyer/service', [BuyerController::class, 'service'])->name('seller.service');
Route::get('/buyer/service', [BuyerController::class, 'service'])->name('buyer.service');
Route::get('/buyer/contact', [BuyerController::class, 'contact'])->name('buyer.contact');
Route::get('/buyer/review-page', [BuyerController::class, 'reviewPage'])->name('buyer.reviewPage');
Route::get('/buyer/returnproducts', [BuyerController::class, 'returnProducts'])->name('buyer.returnproducts');
Route::post('/buyer/cart/store', [CartController::class, 'store'])->name('buyer.cart.store');
Route::get('/buyer/cart', [BuyerController::class, 'cart'])->name('buyer.cart');
Route::get('/buyer/watchlist', [BuyerController::class, 'watchlist'])->name('buyer.watchlist');
Route::post('/buyer/favorite/store', [FavoriteController::class, 'store'])->name('buyer.favorite.store');
Route::get('/buyer/favorite', [BuyerController::class, 'favorite'])->name('buyer.favorite');
Route::get('/buyer/purchase-history', [PurchaseHistoryController::class, 'index'])->name('buyer.purchase-history');
Route::get('/buyer/connection', [ConnectionController::class, 'index'])->name('buyer.connection');


//FollowBlock
Route::get('/buyer/followblock', [FollowBlockController::class, 'index'])->name('buyer.followblock');
Route::get('/buyer/report', [BuyerController::class, 'report'])->name('buyer.report');
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
Route::get('/admin/ranking', [ProductController::class, 'adminRanking'])->name('admin.ranking');
//Dashboard
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
//Category
Route::get('/admin/category', [CategoriesController::class, 'index'])->name('admin.category');
//Complainhandling
Route::get('/admin/complainhandling', [AdminController::class, 'complainhandling'])->name('admin.complainhandling');
Route::get('/admin/complaindetail', [AdminController::class, 'complaindetail'])->name('admin.complaindetail');
//Connection
Route::get('/admin/connection', [AdminController::class, 'connection'])->name('admin.connection');



