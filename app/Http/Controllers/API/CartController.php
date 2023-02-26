<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResourceController;
use App\Http\Requests\AddToCartRequest;
use App\Http\Requests\CheckoutCartRequest;
use App\Http\Requests\UpdateCartItemQuantityRequest;
use App\Http\Services\CartService;
use App\Models\CartItem;

class CartController extends Controller
{
    public function __construct(protected CartService $cartService) {}

    public function show() {
        return $this->cartService->getCurrentUserCart()->load(['items.product', 'items.product_variation']);
    }

    public function addToCart(AddToCartRequest $request) {
        $cart = $this->cartService->addToCurrentUserCart($request->quantity, $request->product_id, $request->variation_id);

        return response([
            'message' => 'Successfully added to cart.',
            'data' => [
                'item_count' => $cart->items->count(),
                'items' => $cart->items,
            ]
        ]);
    }

    public function updateQuantity(UpdateCartItemQuantityRequest $request) {
        $cartItem = $this->cartService->updateCartItemQuantity(CartItem::find($request->cart_item_id), $request->quantity);

        return response([
            'data' => [
                'item' => $cartItem
            ]
        ]);
    }

    public function checkout(CheckoutCartRequest $request) {
        $document = $this->cartService->checkoutCurrentUserCart($request->billing_address, $request->shipping_address);

        return redirect(route('order-history'));
    }
}
