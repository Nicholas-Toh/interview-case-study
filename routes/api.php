<?php

use App\Http\Controllers\API\CatalogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('catalog')->controller(CatalogController::class)->group(function () {
    Route::get('', 'index')->name('api.catalog');
});

Route::prefix('cart')->controller(CatalogController::class)->group(function () {
    Route::get('', 'show')->name('api.cart.show');
    Route::post('add-item', 'addToCart')->name('api.cart.add_to_cart');
    Route::post('update-quantity', 'updateQuantity')->name('api.cart.update_quantity');
    Route::post('checkout', 'checkout')->name('api.cart.checkout');
});