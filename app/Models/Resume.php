<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $with = ['seeker', 'SeekerDuties', 'education', 'referral', 'skill'];

    /**
     * Get the Seeker that owns the Resume
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Seeker()
    {
        return $this->belongsTo(Seeker::class, '');
    }

    /**
     * Get the SeekerDuties associated with the Resume
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function SeekerDuties()
    {
        return $this->belongsTo(SeekerDuties::class, 'id');
    }
    
    /**
     * Get all of the Education for the Resume
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function Education()
    {
        return $this->hasOne(Education::class, 'id');
    }

    /**
     * Get the Referral that owns the Resume
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Referral()
    {
        return $this->hasOne(Referral::class,'id');
    }

    /**
     * Get the Skill associated with the Resume
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Skill()
    {
        return $this->hasOne(Skill::class, 'id');
    }
}
