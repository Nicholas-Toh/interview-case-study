<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentLineItem extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'document_id',
        'product_id',
        'product_name',
        'product_sku',
        'quantity',
        'total',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'quantity' => 'float',
        'total' => 'float',
    ];

    public function document() {
        return $this->belongsTo(Document::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
