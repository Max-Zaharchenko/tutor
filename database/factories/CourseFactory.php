<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Course::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->sentences(4, true),
        'image_url' => $faker->imageUrl(266, 100),
    ];
});
