<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Candidate;
use Faker\Generator as Faker;

$factory->define(Candidate::class, function (Faker $faker) {
    return [
        'middle_name' => $faker->name,
        'what_i_do' => $faker->jobTitle,
        'candidate_email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'age' => $faker->year,
        'gender' => $faker->randomElement(['male', 'female']),
        'religion' => $faker->randomElement(['christianity', 'muslim']),
        'address_1' => $faker->address,
        'address_2' => $faker->address,
        'highest_qualification' => $faker->randomElement( ['no formal education','primary school', 'secondary school', 'technical school', 'nce', 'nd1', 'nd2', 'bsc', 'msc', 'phd']),
        'discipline' => $faker->jobTitle,
        'city' => $faker->city,
        'lga' => $faker->streetAddress,
        'state' => $faker->country,
        'country' => $faker->country,
        'status' => $faker->randomElement(['hired', 'hunting', 'vacation']),
        'num_of_applications' => $faker->randomNumber($nbDigits = 2),
        'num_of_jobs_done' => $faker->randomNumber($nbDigits = 2),
        'skills' => $faker->jobTitle,
        'about' => $faker->text,
        'img_url' => $faker->url,
        'cv_url' => $faker->url,
        'fb_url' => $faker->url,
        'twt_url' => $faker->url,
        'ig_url' => $faker->url,
        'lnkd_url' => $faker->url,
        'ext_url' => $faker->url,
    ];
});
