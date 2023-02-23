<?php

namespace App\Models;

use App\Models\Traits\isAddress;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use isAddress;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'is_default_billing_address',
        'is_default_shipping_address',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
