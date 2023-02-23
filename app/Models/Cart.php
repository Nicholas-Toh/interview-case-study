<?php

namespace App\Models;

use App\Enums\CartStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'session_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'deleted_at',
    ];

    protected $casts = [
        'status' => CartStatus::class,
    ];
    
    public function items() {
        return $this->hasMany(CartItem::class);
    }

    public function customer() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getTotalAttribute() {
        $sum = 0;
        foreach ($this->items as $item) {
            $sum += $item->quantity * $item->variation->price;
        }
        return $sum;
    }
}
