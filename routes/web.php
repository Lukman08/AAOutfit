<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
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


// Guest
Route::get('/', [GuestController::class, 'index'])->name('index');
Route::get('/produk', [GuestController::class, 'produk'])->name('produk');
Route::get('/detailproduk', [GuestController::class, 'detailproduk'])->name('detailproduk');

// Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'hakakses:admin']], function () {
Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/produk', [AdminController::class, 'produk'])->name('produk');
    Route::post('/insertpengguna', [AdminController::class, 'insertpengguna'])->name('insertpengguna');
    Route::get('/resetpassword/{id}', [AdminController::class, 'resetpassword'])->name('resetpassword');
    Route::get('/deletepengguna/{id}', [AdminController::class, 'deletepengguna'])->name('deletepengguna');

});