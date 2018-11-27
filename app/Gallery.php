<?php

namespace App;
use Auth;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //

    protected $fillable = [
    	'gallery_id','gallery_by' ,'title','images'
    ];

    public function user() //$post->user
    {
        return $this->belongsTo(User::class);
    }

    protected  $primaryKey = 'gallery_id';
}
