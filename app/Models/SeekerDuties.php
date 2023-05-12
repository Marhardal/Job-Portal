<?php

namespace App\Models;

use App\Models\Duties;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SeekerDuties extends Model
{
    use HasFactory;

    /**
     * The Job that belong to the Seeker_Duties
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function Job()
    {
        return $this->belongsTo(Job::class);
    }

    /**
     * Get all of the Duties for the SeekerDuties
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Duties()
    {
        return $this->hasMany(Duties::class, 'id');
    }

    /**
     * Get the Resume that owns the SeekerDuties
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Resumes()
    {
        return $this->hasMany(Resume::class, 'id');
    }

    /**
     * Get the Experience associated with the SeekerDuties
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Experiences()
    {
        return $this->hasOne(Experience::class, 'id');
    }
}
