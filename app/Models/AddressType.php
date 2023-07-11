<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressType extends Model
{
    use HasFactory;

    /**
     * Get the Address associated with the AddressType
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Address()
    {
        return $this->hasOne(Address::class);
    }
}
