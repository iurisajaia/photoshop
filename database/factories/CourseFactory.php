<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'author' => $faker->name,
        'duration' => $faker->time() ,
        'image' => $faker->imageUrl(),
        'language' => 'ქართული'
    ];
});
