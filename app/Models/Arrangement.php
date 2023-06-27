<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arrangement extends Model
{
    use HasFactory;

    /**
     * Get all of the Vacancy for the Arrangement
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Vacancy()
    {
        return $this->hasMany(Vacancy::class);
    }

    
}
