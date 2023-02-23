<?php

namespace App\Models\Traits;

trait isAddress
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillableAddressFields = [
        'first_name',
        'last_name',
        'address_1',
        'address_2',
        'city',
        'state',
        'postcode',
        'country',
        'phone',
    ];

    public function __construct(array $attributes = []) {
        parent::__construct($attributes);

        $this->fillable = array_merge($this->fillable, $this->fillableAddressFields);
    }
}
