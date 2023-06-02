<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    /**
     * Get the SeekerDuties associated with the Job
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function SeekerDuties()
    {
        return $this->hasOne(Seeker_Duties::class);
    }
}
