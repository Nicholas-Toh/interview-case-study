<?php

namespace App\Models;

use App\Enums\ProductType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'sku',
        'description',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'deleted_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'type' => ProductType::class,
        'price' => 'float',
        'deleted_at' => 'datetime',
    ];

    public function variations() {
        return $this->hasMany(ProductVariation::class, 'product_id');
    }

    public function attributes() {
        return $this->hasManyThrough(ProductVariation::class, ProductAttribute::class, 'product_id', 'variation_id');
    }

    public function categories() {
        return $this->belongsToMany(ProductCategory::class, 'product_product_category', 'product_id', 'category_id');
    }

    public function images() {
        return $this->hasManyThrough(ProductImage::class, ProductVariation::class, 'product_id', 'variation_id');
    }
    
    public function eligible_users() {
        return $this->belongsToMany(User::class, 'product_user', 'user_id');
    }

    public function eligible_tiers() {
        return $this->belongsToMany(Tier::class, 'product_tier', 'tier_id');
    }
}
