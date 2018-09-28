<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Lesson::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->sentences(2, true),
        'video_url' => $faker->url,
    ];
});
