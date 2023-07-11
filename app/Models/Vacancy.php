<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nnjeim\World\WorldHelper;

class Vacancy extends Model
{
    use HasFactory;

    protected $world;
    protected $with=['organisation', 'job', 'arrangement'];

    /**
     * Get the Organisation that owns the Vacancy
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Organisation()
    {
        return $this->belongsTo(Organisation::class);
    }

    /**
     * Get the Job that owns the Vacancy
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Job()
    {
        return $this->belongsTo(Job::class);
    }

    /**
     * Get the Arrangement that owns the Vacancy
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Arrangement()
    {
        return $this->belongsTo(Arrangement::class);
    }

}
