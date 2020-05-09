<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }
}
