<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'content' => $faker->text($maxNbChars = 400),
        'published_at' => $faker->dateTime
    ];
});
