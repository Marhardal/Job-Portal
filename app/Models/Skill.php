<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    /**
     * Get the Resumes that owns the Skill
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Resumes()
    {
        return $this->belongsTo(Resume::class, 'resume_id', 'id');
    }
}
