<?php

namespace App\Models;

use App\Enums\ProductType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
        'price',
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
        return $this->hasMany(Product::class, 'parent_id');
    }

    public function attributes() {
        return $this->hasMany(ProductAttribute::class, 'attribute_option_id');
    }

    public function images() {
        return $this->hasMany(ProductImage::class);
    }
    
    public function eligible_users() {
        return $this->belongsToMany(User::class, 'product_user', 'user_id');
    }

    public function eligible_tiers() {
        return $this->belongsToMany(Tier::class, 'product_tier', 'tier_id');
    }
}
