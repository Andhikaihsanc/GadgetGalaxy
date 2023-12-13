<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\autentikasiController;
use App\Http\Controllers\CRUD;
use App\Http\Controllers\ViewController;

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



Route::group(['middleware' => 'auth'], function () {
    Route::get('logout', [autentikasiController::class, 'logout'])->name('logout');
    Route::get('jualBarang', [ViewController::class, 'indexJualBarang'])->name('jualBarang');
    Route::post('jualBarang', [CRUD::class, 'jualBarang'])->name('jualBarang');
    Route::get('profile', [CRUD::class, 'indexProfile'])->name('profile');
    Route::post('profile', [CRUD::class, 'updateProfile'])->name('profile');
});

Route::get('/', [CRUD::class, 'dashboard'])->name('dashboard');
Route::get('login', [autentikasiController::class, 'indexLogin'])->name('login');
Route::post('login', [autentikasiController::class, 'login'])->name('login');
Route::get('register', [autentikasiController::class, 'indexRegister'])->name('register');
Route::post('register', [autentikasiController::class, 'register'])->name('register');
Route::get('about', [ViewController::class, 'indexAbout'])->name('about');
Route::get('search', [CRUD::class, 'search'])->name('search');
Route::get('product', [CRUD::class, 'product'])->name('product');
Route::get('productDetail/{id}', [CRUD::class, 'showDetail'])->name('detail');
