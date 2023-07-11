<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Auth\Events\Registered;

// event(new Registered(User));

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $with=['type', 'organisation', 'address'];

     public function setPasswordAttribute($password)
     {
        $this->attributes['password'] = bcrypt($password);
     }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    /**
     * Get the Type that owns the Type
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

     public function Type()
     {
         return $this->belongsTo(Type::class);
     }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the Resume that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Resume()
    {
        return $this->belongsTo(Resume::class);
    }

    /**
     * Get the Letter associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Letter()
    {
        return $this->hasOne(User::class);
    }

    /**
     * The Organisation that belong to the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function Organisation()
    {
        return $this->belongsToMany(Organisation::class, 'recruiters', 'user_id', 'organisation_id')->withPivot('organisation_id');
    }

    /**
     * Get the Address associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Address()
    {
        return $this->hasOne(Address::class);
    }
}
