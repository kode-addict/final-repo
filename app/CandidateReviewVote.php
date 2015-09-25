<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CandidateReviewVote extends Model
{
    protected $fillable = [
    	'user_id',
    	'candidate_review_id',
    	'vote'
    ];
}
