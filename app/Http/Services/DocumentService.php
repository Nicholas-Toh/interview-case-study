<?php

namespace App\Http\Services;

use App\Enums\CartStatus;
use App\Enums\DocumentStatus;
use App\Enums\DocumentType;
use App\Enums\ProductType;
use App\Models\Cart;
use App\Models\Document;
use App\Models\Product;
use App\Models\ProductVariation;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DocumentService
{
    public function createDocument(
        DocumentStatus $status,
        DocumentType $type,
        float $total,
        User $user,
        array $billingAddress,
        array $shippingAddress,
        array $lineItems
    ): Document {
        return DB::transaction(function () use (
            $status,
            $type,
            $total,
            $user,
            $billingAddress,
            $shippingAddress,
            $lineItems
        ) {
            $document = Document::create([
                'status' => $status,
                'type' => $type,
                'total' => $total,
                'user_id' => $user->id,
            ]);
    
            $document->billing_address()->create($billingAddress);
            $document->shipping_address()->create($shippingAddress);

            $document->line_items()->createMany(array_map(function ($item) {
                return [
                    'product_name' => $item->product->name,
                    'product_sku' => $item->variation->sku,
                    'unit_price' => $item->variation->price,
                    'quantity' => $item->quantity,
                    'total' => $item->total,
                ];
            }, $lineItems));

            return $document;
        });
    }
}
