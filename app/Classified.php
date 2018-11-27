<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Classified extends Model
{
    //
    protected $fillable = [
    	'posted_by', 'title', 'description', 'cost', 'images'
    ];

    public function user() //$post->user
    {
        return $this->belongsTo(User::class);
    }

    protected  $primaryKey = 'classified_id';
}
