<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
        
    public function users()
    {

        return $this->belongsToMany(User::class);

    }

    public function reviews()
    {

        return $this->hasMany(Review::class);

    }
}
