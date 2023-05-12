<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seeker extends Model
{
    use HasFactory;

    /**
     * Get the resume associated with the Seeker
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function resume()
    {
        return $this->hasOne(Resume::class);
    }
}
