<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];


    public function checkLikeCandidate($candidateId)
    {

        return \App\LikeCandidate::where('candidate_id',$candidateId)->where('user_id',auth()->user()->id)->count();

    }
    public function checkFavoriteCandidate($candidateId)
    {

        return \App\FavoriteCandidate::where('candidate_id',$candidateId)->where('user_id',auth()->user()->id)->count();

    }

    public function checkLikeParty($partyId)
    {

        return \App\LikeParty::where('party_id',$partyId)->where('user_id',auth()->user()->id)->count();

    }

    public function checkFavoriteParty($partyId)
    {

        return \App\FavoriteParty::where('party_id',$partyId)->where('user_id',auth()->user()->id)->count();

    }           

}
