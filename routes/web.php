<?php

use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class, 'halamanUtama'])->name('utama');
Route::get('/login', [FrontController::class, 'signIn'])->name('signIn');
Route::get('/wali/santri', [FrontController::class, 'waliSantri'])->name('wali');
Route::post('/auth', [FrontController::class, 'auth'])->name('auth');
Route::get('/logout', [FrontController::class, 'logout'])->name('logout');

Route::post('/pembayaran', [FrontController::class, 'pembayaran'])->name('pembayaran');

