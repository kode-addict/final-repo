<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoteReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vote_review', function (Blueprint $table) {
            
            $table->integer('user_id')->unsigned();

            $table->integer('review_id')->unsigned();

            $table->boolean('status');

            $table->foreign('user_id')->references('id')->on('users');

            $table->foreign('review_id')->references('id')->on('reviews');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vote_review');
    }
}
