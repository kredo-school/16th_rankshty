<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/buyer/favorite', [App\Http\Controllers\HomeController::class, 'favorite'])->name('buyer.favorite');
Route::get('/seller/productslist', [App\Http\Controllers\HomeController::class, 'productslist'])->name('seller.productslist');
// ↑ need change for byer or seller

// Route::group(['middleware' => 'auth'],function(){
//     Route::get('/', [HomeController::class, 'index'])->name('index');

// });



// Route::group(['middleware' => 'auth'],function(){
//     Route::get('/', [HomeController::class, 'index'])->name('index');
//     # Post
//     Route::get('/post/create', [PostController::class,'create'])->name('post.create');

//     #Admin
//     Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'],function(){
//         # Admin Users
//         //route('admin.users) is the same with admin/users
//         Route::get('/users',[UsersController::class,'index'])->name('users');
//         Route::delete('/users/{id}/deactivate',[UsersController::class,'deactivate'])->name('users.deactivate');
//         # Admin Posts
//         Route::get('/posts',[PostsController::class,'index'])->name('posts'); //admin.posts
//         Route::delete('/posts/{id}/hide',[PostsController::class,'hide'])->name('posts.hide');
//         # Admin Categories
//         Route::get('/categories',[CategoriesController::class,'index'])->name('categories'); //admin.categories
//         Route::delete('/categories/{id}/destroy',[CategoriesController::class,'destroy'])->name('categories.destroy');
//     });

//     Route::group(['middleware' => 'auth'], function(){
//         Route::get('/',[HomeController::class, 'index'])->name('index');
//         Route::get('/people',[HomeController::class, 'search'])->name('search');
//     });
// });
