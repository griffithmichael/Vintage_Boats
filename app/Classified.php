<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classified extends Model
{
    //
    protected $fillable = [
    	'classified_id', 'posted_by', 'title', 'description', 'cost', 'images', 'created_at', 'updated_at'
    ];
}
