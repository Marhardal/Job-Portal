<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

     /**
     * Get the User that owns the Address
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the Address_Type that owns the Address
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function AddressType()
    {
        return $this->belongsTo(AddressType::class);
    }

    
}
