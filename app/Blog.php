<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    

	protected $fillable = [
    	'title','body'
    ];




    public function user() //$post->user
    {
        return $this->belongsTo(User::class);
    }
}
