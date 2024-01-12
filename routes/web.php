<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController;

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
// Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function(){
//     //User Management
//     Route::get('/usermanagement', [UsersController::class, 'index'])->name('users');
// });

//User Management
Route::get('admin/usermanagement', [UsersController::class, 'index'])->name('users');