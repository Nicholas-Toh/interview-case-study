<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'path',
    ];

    protected $appends = [
        'public_path',
    ];

    public function product() {
        return $this->belongsTo(ProductVariation::class);
    }

    public function getPublicPathAttribute() {
        return asset($this->path);
    }
}
