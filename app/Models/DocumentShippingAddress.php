<?php

namespace App\Models;

use App\Models\Traits\isAddress;
use Illuminate\Database\Eloquent\Model;

class DocumentShippingAddress extends Model
{
    use isAddress;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'document_id',
    ];

    public function document() {
        return $this->belongsTo(Document::class);
    }
}
