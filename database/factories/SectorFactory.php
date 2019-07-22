<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Sector;
use Faker\Generator as Faker;

$factory->define(Sector::class, function (Faker $faker) {
    return [
        'title' => $faker->jobTitle,
        'description' => $faker->text,
        'added_by' => $faker->name,
        'sec_img_url' => $faker->url
    ];
});
