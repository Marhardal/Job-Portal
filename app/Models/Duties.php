<?php

namespace App\Models;

use App\Models\SeekerDuties;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Duties extends Model
{
    use HasFactory;

    /**
     * The Experience that belong to the Duties
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function Experience()
    {
        return $this->belongsToMany(Experience::class, 'duty_experiences', 'duties_id', 'experience_id')->withPivot('duty_id');
    }

    /**
     * Get the Job that owns the Duties
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Job()
    {
        return $this->belongsTo(Job::class);
    }
}
