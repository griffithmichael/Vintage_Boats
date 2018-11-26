<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    






    public function user() //$post->user
    {
        return $this->belongsTo(User::class);
    }
}
