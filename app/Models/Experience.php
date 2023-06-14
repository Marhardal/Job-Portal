<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $with = ["job", "resume", "duties"];

    /**
     * Get the Resume that owns the Experience
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Resume()
    {
        return $this->belongsTo(Resume::class);
    }

    /**
     * The Duties that belong to the Experience
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function duties()
    {
        return $this->belongsToMany(Duties::class, 'duty_experiences', 'experience_id', 'duty_id')->withPivot('duty_id', 'experience_id');
    }

    /**
     * Get the Job that owns the Experience
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }
}
