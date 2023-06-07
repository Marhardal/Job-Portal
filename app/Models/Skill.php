<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    // protected $with=["resume"];
    /**
     * Get the Resumes that owns the Skill
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    /**
     * The Resume that belong to the Resume
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function Resume()
    {
        return $this->belongsToMany(Resume::class, 'resume_skills', 'skill_id', 'resume_id', 'id');
    }
}
