<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FbReg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('fbusers', function (Blueprint $table) {
            $table->increments('id');
            // $table->string('fb_id')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('avatar');

            $table->rememberToken();
            $table->timestamps();
        });
        //  Schema::create('fbusers', function(Blueprint $table)
        // {
        //   $table->increments('id');
        //   $table->string('name');
        //   $table->string('email')->nullable();
        //   $table->string('avatar');
        //   $table->string('provider');
        //   $table->string('provider_id')->unique();
        //   $table->rememberToken();
        //   $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('fbusers');
    }
}
