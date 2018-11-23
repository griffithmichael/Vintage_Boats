<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //

    protected $fillable = [
    	'gallery_id','gallery_by' ,'title','images'
    ];
}
