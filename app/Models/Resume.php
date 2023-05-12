<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    /**
     * Get the Seeker that owns the Resume
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Seeker()
    {
        return $this->belongsTo(Seeker::class);
    }

    /**
     * Get the SeekerDuties associated with the Resume
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function SeekerDuties()
    {
        return $this->belongsTo(SeekerDuties::class);
    }
    
}
