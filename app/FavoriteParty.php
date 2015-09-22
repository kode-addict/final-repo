<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FavoriteParty extends Model
{
    protected $table='favorite_party';

    protected $fillable=['user_id','party_id'];

    public function user()
    {

        return $this->belongsTo(User::class);

    }
}
