<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

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

Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function(){
    Route::match(['get','post'],'login','AdminController@login');
    Route::group(['middleware' => ['admin']],function(){
        Route::get('dashboard','AdminController@dashboard');
        Route::get('logout','AdminController@logout');
    });
   
});

Route::resource('products', ProductController::class);
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::post('/update-featured-status/{id}', [ProductController::class, 'updateFeaturedStatus']);

Route::resource('categories', CategoryController::class);
Route::resource('users', UserController::class);
// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::resource('users', AdminController::class);
// });


