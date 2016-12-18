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


$factory->define(App\Band::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'start_date' => $faker->date,
        'website' => $faker->name,
        'still_active' => 1,
    ];
});

$factory->define(App\Album::class, function (Faker\Generator $faker) {

    return [
    	'band_id' => $faker->numberBetween(1,50),
        'name' => $faker->name,
        'recorded_date' => $faker->date,
        'release_date' => $faker->date,
        'number_of_tracks' => $faker->numberBetween(5,14),
        'label' => $faker->name,
        'producer' => $faker->name,
        'genre' => $faker->name,
    ];
});