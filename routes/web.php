<?php

use App\Http\Controllers\API\OrderHistoryController;
use App\Http\Controllers\Web\HomePageController;
use App\Http\Controllers\Web\LoginController;
use App\Http\Controllers\Web\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServicePcartsrovider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomePageController::class, 'index'])->name('homepage');

Route::prefix('register')->controller(RegisterController::class)->group(function () {
    Route::get('', 'index')->name('register');
    Route::post('', 'store')->name('register.store');
});

Route::prefix('login')->controller(LoginController::class)->group(function () {
    Route::get('', 'index')->name('login');
    Route::post('', 'store')->name('login.store');
});

Route::prefix('history')->controller(OrderHistoryController::class)->group(function () {
    Route::get('', 'index')->name('history');
    Route::get('{document}', 'show')->name('history.show');
});
