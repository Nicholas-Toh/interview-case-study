<?php

namespace App\Http\Validators;

use App\Enums\CartStatus;
use App\Models\Cart;
use Exception;

class CartValidator
{
    /**
     * Validate that the cart has not been checked out already
     *
     * @param Cart $cart
     * @return void
     * @throws Exception
     */
    public function validate(Cart $cart)
    {
        if ($cart->status === CartStatus::CheckoutCompleted) {
            throw new Exception("Invalid cart.");
        }
    }
}