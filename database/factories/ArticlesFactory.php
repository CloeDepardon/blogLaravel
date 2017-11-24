<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
      'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
      'content' => $faker->paragraphs($nb = 4, $asText = false)   ,
      'created_at' => $faker->dateTime,
      'updated_at' => $faker->dateTime,
      'published_at' => $faker->dateTime,
      'status' => $faker->numberBetween($min = 1, $max = 3)
    ];
});
