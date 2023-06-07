<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

     /**
     * Get the User associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function User()
    {
        return $this->hasOne(User::class);
    }
}
