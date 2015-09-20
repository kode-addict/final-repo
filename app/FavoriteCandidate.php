<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FavoriteCandidate extends Model
{
    protected $table='favorite_candidate';

    protected $fillable=['user_id','candidate_id'];

    public function user()
    {

        return $this->belongsTo(User::class);

    }
}
