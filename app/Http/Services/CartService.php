<?php

namespace App\Http\Services;

use App\Enums\CartStatus;
use App\Enums\DocumentStatus;
use App\Enums\DocumentType;
use App\Enums\ProductType;
use App\Http\Validators\CartValidator;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Document;
use App\Models\Product;
use App\Models\ProductVariation;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartService
{
    public function __construct(
        protected DocumentService $documentService,
        protected CartValidator $cartValidator,
    ) {}

    public function getCurrentUserCart() {
        return $this->getUserCart(Auth::user());
    }

    public function getUserCart(User|int $user): Cart {
        if (!is_int($user)) {
            $user = $user->id;
        }

        $cart = Cart::whereUserId($user)->whereStatus(CartStatus::PendingCheckout)->get()->first();
        
        if (!$cart) {
            $cart = $this->createUserCart($user);
        }

        return $cart;
    }

    protected function createUserCart(User|int $user): Cart {
        if (!is_int($user)) {
            $user = $user->id;
        }

        return Cart::create([
            'user_id' => $user,
            'session_id' => session()->getId(),
        ]);
    }

    public function addToCurrentUserCart(int $quantity, ?int $product_id = null, ?int $variation_id = null): Cart {
        if (is_null($product_id) && is_null($variation_id)) {
            throw new Exception("No product added to cart");
        }

        return DB::transaction(function() use ($quantity, $product_id, $variation_id) {
    
            if (!is_null($product_id)) {
                $product = Product::findOrFail($product_id);
            }
            else {
                $product = ProductVariation::findOrFail($variation_id);
            }
    
            $cart = $this->addToCart($this->getCurrentUserCart(), $quantity, $product);
            return $cart->fresh();
        });
    }

    public function addToCart(Cart $cart, int $quantity, Product|ProductVariation $product): Cart {
        $this->cartValidator->validate($cart);

        if ($quantity < 0) {
            throw new Exception("Please add least 1 item.");
        }

        return DB::transaction(function () use ($cart, $quantity, $product) {
            if ($product->type === ProductType::Variation) {
                return $cart->items()->create([
                    'product_id' => $product->product_id,
                    'variation_id' => $product->id,
                    'quantity' => $quantity,
                ]);
            }

            $cart->items()->create([
                'product_id' => $product->id,
                'quantity' => $quantity,
            ]);

            return $cart;
        });
    }

    public function updateCartItemQuantity(CartItem $cartItem, int $quantity): CartItem {
        $this->cartValidator->validate($cartItem->cart);

        if ($quantity < 0) {
            throw new Exception("Please add least 1 item.");
        }

        return DB::transaction(function () use ($cartItem, $quantity) {
            $cartItem->quantity = $quantity;
            $cartItem->save();
            
            return $cartItem;
        });
    }

    public function deleteCartItem(CartItem $cartItem): bool|null {
        $this->cartValidator->validate($cartItem->cart);

        return DB::transaction(function () use ($cartItem) {
            return $cartItem->delete();
        });
    }

    public function checkoutCurrentUserCart(array $billingAddress, array $shippingAddress): Document {
        return $this->checkoutCart($this->getCurrentUserCart(), $billingAddress, $shippingAddress);
    }

    public function checkoutCart(Cart $cart, array $billingAddress, array $shippingAddress): Document {
        $this->cartValidator->validate($cart);

        return DB::transaction(function() use (
            $cart,
            $billingAddress,
            $shippingAddress,
        ) {
            $document = $this->documentService->createDocument(
                DocumentStatus::Processing,
                DocumentType::SalesOrder,
                $cart->total,
                $cart->user,
                $billingAddress,
                $shippingAddress,
                $cart->items->map(function ($item) {
                    return [
                        'product_name' => $item->product->name,
                        'product_sku' => $item->variation->sku,
                        'unit_price' => $item->variation->price,
                        'quantity' => $item->quantity,
                        'total' => $item->total,
                    ];
                })
            );

            $cart->status = CartStatus::CheckoutCompleted;
            $cart->save();

            return $document->refresh();
        });
    }
}
