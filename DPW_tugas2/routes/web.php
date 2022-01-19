<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\posts;
use App\Http\Livewire\barangs;
use App\Http\Livewire\pesanans;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', posts::class);

Route::get('/barang', barangs::class);

Route::get('/pesanan', pesanans::class);

Route::get('/home','HomeController@index')->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


