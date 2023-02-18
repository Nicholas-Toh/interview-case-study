<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use SoftDeletes;

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'parent_id',
    ];

    public function parent() {
        return $this->belongsTo(ProductCategory::class);
    }

    public function children() {
        return $this->hasMany(ProductCategory::class, 'parent_id');
    }

    public function products() {
        return $this->belongsToMany(Product::class);
    }
}
