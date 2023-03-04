<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductAttributeOption extends Model
{
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
    ];

    public function attribute() {
        return $this->belongsTo(ProductAttribute::class);
    }

    public function variations() {
        return $this->belongsToMany(ProductVariation::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
