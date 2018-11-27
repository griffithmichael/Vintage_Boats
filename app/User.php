<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'postalcode', 'phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    public function boats()
    {
        return $this->hasMany(Boat::class);
    }

    public function classifieds()
    {
        return $this->hasMany(Classifieds::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function membership()
    {
        return $this->hasOne(Membership::class);
    }

}
