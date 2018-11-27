<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boat extends Model
{
    //

	    protected $fillable = [
    	'VIN','owned_by','model', 'manufacturer', 'year', 'year_purchased','currently_own'
    ];

    public $timestamps = false;

        public function user() //$post->user
    {
        return $this->belongsTo(User::class);
    }

}
