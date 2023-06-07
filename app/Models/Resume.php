<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $with = ['user', 'skill', 'qualification', 'referral'];

    /**
     * Get the user that owns the Resume
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The Qualification that belong to the Resume
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function Qualification()
    {
        return $this->belongsToMany(Qualification::class, 'education', 'resume_id', 'qualification_id', 'id')->withPivot('school', 'start_date', 'graduation_date');
    }

    /**
     * Get the Referral that owns the Resume
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Referral()
    {
        return $this->hasMany(Referral::class);
    }

    /**
     * The Skill that belong to the Resume
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function Skill()
    {
        return $this->belongsToMany(Skill::class, 'resume_skills', 'resume_id', 'skill_id', 'id');
    }

    /**
     * Get all of the Experience for the Resume
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Experience()
    {
        return $this->hasMany(Experience::class);
    }
}
