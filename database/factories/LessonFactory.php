<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Lesson::class, function (Faker $faker) {
    $title = $faker->word;
    return [
        'slug' => str_slug($title),
        'title' => $title,
        'description' => $faker->sentences(2, true),
        'video_url' => $faker->url,
    ];
});
