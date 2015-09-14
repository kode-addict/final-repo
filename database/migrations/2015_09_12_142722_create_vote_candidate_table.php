<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoteCandidateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vote_candidate', function (Blueprint $table) {

            $table->integer('user_id')->unsigned();

            $table->integer('candidate_id')->unsigned();

            $table->boolean('status');

            $table->foreign('user_id')->references('id')->on('users');

            $table->foreign('candidate_id')->references('id')->on('candidates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vote_candidate');
    }
}
