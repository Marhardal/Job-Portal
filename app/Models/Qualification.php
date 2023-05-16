<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;

    /**
     * Get the Education associated with the Qualification
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Education()
    {
        return $this->hasOne(Education::class, '', '');
    }
}
