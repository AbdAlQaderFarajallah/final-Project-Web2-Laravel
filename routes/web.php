<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\postController;
use App\Http\Controllers\siteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('login' ,[AuthController::class , 'login'] ) ->name('login');
Route::post('authenticate' ,[AuthController::class , 'authenticate'] ) ->name('authenticate');
Route::get('logout' ,[AuthController::class , 'logout'] ) ->name('logout');
Route::get('store' ,[AuthController::class , 'store'] ) ->name('store');


Route::get('home' ,[siteController::class , 'home'] ) ->name('home');
Route::get('Profile' ,[siteController::class , 'Profile'] ) ->name('Profile');


Route::get('/' , 'App\Http\Controllers\siteController@showIndex' )->name('site.master');

Route::get('/profile' , 'App\Http\Controllers\siteController@showProfile' );

Route::resource('/post' , 'App\Http\Controllers\postController' );

Route::get('/postpost',function(){
    return view ('site.post');
});
