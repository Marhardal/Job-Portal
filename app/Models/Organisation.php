<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    use HasFactory;

    /**
     * The Users that belong to the Organisation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function Users()
    {
        return $this->belongsToMany(User::class, 'recruiters', 'organisation_id', 'User_id');
    }

    /**
     * Get all of the Vacancy for the Organisation
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Vacancy()
    {
        return $this->hasMany(Vacancy::class);
    }
}
