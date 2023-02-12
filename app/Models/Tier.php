<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tier extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
    ];

    public function users() {
        return $this->belongsToMany(User::class);
    }

    public function products() {
        return $this->belongsToMany(Product::class);
    }
}
