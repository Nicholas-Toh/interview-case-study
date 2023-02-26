<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_id',
        'variation_id',
        'quantity',
    ];

    protected $casts = [
        'unit_price' => 'float',
        'total' => 'float',
    ];

    public function cart() {
        return $this->belongsTo(Cart::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function product_variation() {
        return $this->belongsTo(ProductVariation::class);
    }
}
