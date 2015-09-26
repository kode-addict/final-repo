<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            
            $table->increments('id');

            $table->integer('user_id')->unsigned(); //owner of the reviews

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->text('content');

            $table->integer('candidate_id')->unsigned();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('reviews');
    }
}
