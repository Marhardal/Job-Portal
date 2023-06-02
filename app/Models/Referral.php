<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    use HasFactory;

    /**
     * Get the Resumes associated with the Referral
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Resumes()
    {
        return $this->belongsTo(Resume::class, 'resume_id', 'id');
    }
}
