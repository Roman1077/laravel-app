<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Article::class, function (Faker $faker) {
    $title = $faker->sentence('6', true);
    $slug = Str::substr(Str::lower(preg_replace("/\s+/", '-', $title)), 0, -1);
    return [
        'title' => $title,
        'body' => $faker->paragraph(100, true),
        'slug' => $slug,
        'img' => 'https://via.placeholder.com/600/0000FF/808080 ?Text=Digital.com',
        'created_at' => $faker->dateTimeBetween('-1 years')
    ];
});
