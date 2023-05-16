<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    /**
     * Get the Resume that owns the Education
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Resumes()
    {
        return $this->belongsTo(Resume::class, 'resume_id', 'id');
    }

    /**
     * Get the Qualification that owns the Education
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Qualifications()
    {
        return $this->belongsTo(Qualification::class, 'qualification_id', 'id');
    }
}
