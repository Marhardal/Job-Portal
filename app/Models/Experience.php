<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;


    /**
     * Get the SeekerDuties that owns the Experience
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function SeekerDuties()
    {
        return $this->belongsTo(SeekerDuties::class, 'experience_id', '');
    }

    /**
     * Get all of the Resume for the Experience
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function Resume()
    {
        return $this->hasManyThrough(Resume::class, SeekerDuties::class);
    }
}
