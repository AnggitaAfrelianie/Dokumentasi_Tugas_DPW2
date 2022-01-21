<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;


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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware' => 'auth'], function(){
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/category', CategoryController::class);
Route::resource('/tag', TagController::class);
Route::get('/post/tampil_hapus',PostController::class . '@tampil_hapus')->name('post.tampil_hapus');
Route::get('/post/restore/{id}', PostController::class . '@restore')->name('post.restore');
Route::delete('/post/kill/{id}', PostController::class . '@kill')->name('post.kill');
Route::resource('/post', PostController::class);
Route::resource('/user', UserController::class);

});













Route::group([
        'prefix'=>config('admin.prefix'),
        'namespace'=>'App\\Http\\Controllers',
    ],function () {

        Route::get('login','LoginAdminController@formLogin')->name('admin.login');
        Route::post('login','LoginAdminController@login');

        Route::middleware(['auth:admin'])->group(function () {
            Route::post('logout','LoginAdminController@logout')->name('admin.logout');
            Route::view('/','dashboard')->name('dashboard');
            Route::view('/post','data-post')->name('post')->middleware('can:role,"admin","editor"');
            Route::view('/admin','data-admin')->name('admin')->middleware('can:role,"admin"');
        });
});
