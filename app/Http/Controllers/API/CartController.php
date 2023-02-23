<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\ResourceController;
use App\Http\Requests\AddToCartRequest;
use App\Http\Requests\CheckoutCartRequest;
use App\Http\Requests\UpdateCartItemQuantityRequest;
use App\Http\Services\CartService;
use Illuminate\Http\Request;

class CartController
{
    public function __construct(protected CartService $cartService) {}

    public function show() {
        return $this->cartService->getCurrentUserCart()->load(['items.product', 'items.product_variation']);
    }

    public function addToCart(AddToCartRequest $request) {
        $this->cartService->addToCurrentUserCart($request->quantity, $request->product_id, $request->variation_id);

        return response([
            'message' => 'Successfully added to cart.'
        ]);
    }

    public function updateQuantity(UpdateCartItemQuantityRequest $request) {
        
    }

    public function checkout(CheckoutCartRequest $request) {
        $document = $this->cartService->checkoutCurrentUserCart($request->billing_address, $request->shipping_address);

        return redirect(route('order-history'));
    }
}
