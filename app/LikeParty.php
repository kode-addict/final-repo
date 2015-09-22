<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LikeParty extends Model
{
    protected $table='like_party';

    protected $fillable=['user_id','party_id'];

    public function user()
    {

        return $this->belongsTo(User::class);

    }
}
