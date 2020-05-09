<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use SoftDeletes;

    public function genders()
    {
        return $this->belongsToMany(Gender::class);
    }

    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }

    public function getUrlCoverAttribute()
    {
        if (substr($this->cover, 0, 4) == "http") {
            return $this->cover;
        }

        return '/images/movies/' . $this->cover;
    }

    public function getGendersMovieEditAttribute()
    {
        return $this->genders()->pluck('gender_id')->toArray();
    }

    public function getActorsMovieEditAttribute()
    {
        return $this->actors()->pluck('actor_id')->toArray();
    }
}
