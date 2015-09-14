<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Candidate::class, function ($faker) {

    return [
        'name' => $faker->name,
        'image_url' => $faker->text,
    ];
});

$factory->define(App\Review::class, function ($faker) {

    return [
        'candidate_id' 	=> $faker->name,
        'user_id' 		=> $faker->text,
        'content'		=> $faker->text
    ];
});

