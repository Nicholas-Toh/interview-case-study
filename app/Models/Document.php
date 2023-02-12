<?php

namespace App\Models;

use App\Enums\DocumentStatus;
use App\Enums\DocumentType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'status',
        'type',
        'total',
        'user_id',
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
        'status' => DocumentStatus::class,
        'type' => DocumentType::class,
        'total' => 'float',
        'deleted_at' => 'datetime',
    ];

    public function line_items() {
        return $this->hasMany(DocumentLineItem::class);
    }

    public function customer() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
