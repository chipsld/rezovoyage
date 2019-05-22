<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        // 'label'=>$faker->name,
        // 'description'=>$faker->sentence,
    ];
});
