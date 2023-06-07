<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;

    /**
     * Get the Resume associated with the Qualification
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    /**
     * The Resume that belong to the Qualification
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function Resume()
    {
        return $this->belongsToMany(Resume::class, 'Education', 'education', 'qualification_id', 'resume_id', 'id');
    }
}
