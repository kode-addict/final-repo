<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LikeCandidate extends Model
{
    protected $table='like_candidate';

    protected $fillable=['user_id','candidate_id'];

    public function user()
    {

        return $this->belongsTo(User::class);

    }
}
