<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CandidateReview extends Model
{
	protected $fillable = [
		'candidate_id',
		'user_id',
		'review'
	];
}
