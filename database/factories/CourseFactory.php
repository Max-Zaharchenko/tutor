<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Course::class, function (Faker $faker) {
    $title = $faker->word;
    return [
        'slug' => str_slug($title),
        'title' => $title,
        'description' => $faker->sentences(4, true),
        'image_url' => $faker->imageUrl(266, 100),
    ];
});
