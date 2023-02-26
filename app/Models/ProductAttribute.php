<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
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
        'value',
        'value_label',
    ];

    public function variations() {
        return $this->belongsToMany(ProductVariation::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
