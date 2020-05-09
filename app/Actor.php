<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public function genders(){
        return $this->belongsToMany(Movie::class);
    }
}
