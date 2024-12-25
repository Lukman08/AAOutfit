<?php

use App\Http\Controllers\GuestController;
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

// Guest
Route::get('/', [GuestController::class, 'index'])->name('index');
Route::get('/produk', [GuestController::class, 'produk'])->name('produk');
Route::get('/detailproduk', [GuestController::class, 'detailproduk'])->name('detailproduk');
