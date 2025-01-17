<?php

use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use Filament\Notifications\Notification;
use App\Http\Controllers\FrontController;
use Filament\Notifications\Events\DatabaseNotificationsSent;


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

Route::get('/', [MainController::class, 'viewUtama'])->name('utama');

Route::post('/auth', [MainController::class, 'authLogin'])->name('auth');
Route::get('/login', [MainController::class, 'signIn'])->name('signIn');

Route::middleware(['auth.redirect'])->group(function () {

    Route::get('/logout', [MainController::class, 'logout'])->name('logout');

    Route::post('/pembayaran/santri', [MainController::class, 'pembayaran'])->name('pembayaran');

    Route::get('/wali/santri', [MainController::class, 'waliSantri'])->name('wali');

});


