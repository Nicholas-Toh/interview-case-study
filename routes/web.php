<?php

use App\Http\Controllers\Web\HomePageController;
use App\Http\Controllers\Web\LoginController;
use App\Http\Controllers\Web\LogoutController;
use App\Http\Controllers\Web\RegisterController;
use App\Models\Product;
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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', [HomePageController::class, 'index'])->name('homepage');
    Route::get('/catalog', [HomePageController::class, 'index'])->name('catalog');
    Route::get('/catalog/{product:sku}', function (Product $product) {
        $product->load(['variations.images', 'variations.attributes', 'unique_attribute_values']);
        return view('catalog_details', ['product' => $product]);
    })->name('catalog.details');

});

Route::prefix('register')->controller(RegisterController::class)->group(function () {
    Route::get('', 'index')->name('register');
    Route::post('', 'store')->name('register.store');
});

Route::prefix('login')->controller(LoginController::class)->group(function () {
    Route::get('', 'index')->name('login');
    Route::post('', 'store')->name('login.store');
});


Route::get('logout', [LogoutController::class, 'index'])->name('logout');