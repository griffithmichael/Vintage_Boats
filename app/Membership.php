<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    //

    protected $fillable = [
        'member_id', 'expiration_date', 'paid'
    ];

    public $timestamps = false;

    protected  $primaryKey = 'member_id';

    public function user() //$post->user
    {
        return $this->belongsTo(User::class);
    }
}
