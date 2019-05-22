<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Voyage;
use Faker\Generator as Faker;

$factory->define(Voyage::class, function (Faker $faker) {
    return [
        'image' => $faker->image,
        'destination' => $faker->country,
        'description' => $faker->sentence,
        'image' => $faker->url,
        'prix' => $faker->numberBetween(1000, 9000),
        'titre' => $faker->text,
    ];
});
