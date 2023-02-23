<?php

namespace App\Enums;

enum CartStatus: string
{
    case PendingCheckout = 'pending_checkout';
    case CheckoutCompleted = 'checkout_completed';
}
