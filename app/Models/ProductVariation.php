<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'product_id',
        'sku',
        'price',
    ];

    /**
     * All of the relationships to be touched.
     *
     * @var array
     */
    protected $touches = ['product'];

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function attribute_options() {
        return $this->belongsToMany(ProductAttributeOption::class);
    }

    public function images() {
        return $this->hasMany(ProductImage::class, 'variation_id');
    }
}
