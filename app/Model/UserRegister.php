<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserRegister extends Model
{
    //
    protected $table = "users";
	 protected $fillable = [
	 'name',
	 'email',
	 'password'];
	 
	 protected $hidden = ['password'];
}

