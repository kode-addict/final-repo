<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidateReviewVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_review_votes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('candidate_review_id')->unsigned();
            $table->tinyInteger('vote');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('candidate_review_id')->references('id')->on('candidate_reviews');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('candidate_review_votes');
    }
}
