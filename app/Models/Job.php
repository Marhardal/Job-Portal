<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    /**
     * Get all of the Experience for the Job
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Experience()
    {
        return $this->hasMany(Experience::class, );
    }

    /**
     * Get all of the Duties for the Job
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function Duties()
    {
        return $this->hasManyThrough(Duties::class, Experience::class);
    }

    /**
     * Get all of the Vacancy for the Job
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Vacancy()
    {
        return $this->hasMany(Vacancy::class);
    }
}
