<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    use HasFactory;

    protected $with=['user', 'address'];

    /**
     * Get the user that owns the Resume
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the Address that owns the Letter
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Address()
    {
        return $this->belongsTo(Address::class);
    }
}
