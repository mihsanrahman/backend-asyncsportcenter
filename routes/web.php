<?php

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

use App\Http\Controllers\BookingController;

Route::get('/', [BookingController::class, 'welcome'])->name('welcome');
Route::get('/booking', [BookingController::class, 'booking'])->name('booking');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
Route::get('/payment/{booking}', [BookingController::class, 'payment'])->name('payment');
Route::post('/payment/{booking}', [BookingController::class, 'processPayment'])->name('payment.process');

