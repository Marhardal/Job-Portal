<?php

namespace App\Models;

use App\Models\SeekerDuties;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Duties extends Model
{
    use HasFactory;

    /**
     * Get the SeekerDuties that owns the Duties
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function SeekerDuties()
    {
        return $this->hasMany(SeekerDuties::class);
    }
}
