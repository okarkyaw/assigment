<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //

    function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
