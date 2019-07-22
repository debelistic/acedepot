<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Job;
use Faker\Generator as Faker;

$factory->define(Job::class, function (Faker $faker) {
    return [
        'job_subject' => $faker->jobTitle,
        'job_description' => $faker->text,
        'added_by_email' => $faker->email,
        'job_category' => $faker->jobTitle,
        'job_sector' => $faker->jobTitle,
        'minimum_qualification' => $faker->randomElement(['no formal education','primary school', 'secondary school', 'technical school', 'nce', 'nd1', 'nd2', 'bsc', 'msc', 'phd']),
        'language' => $faker->country,
        'experience' => $faker->randomElement(['0-1', '1-3', '3-5', 'above 5 years']),
        'age_range' => $faker->randomElement(['18-25', '26-30', 'above 30']),
        'language_proficiency' => $faker->randomElement(['fluent', 'native user']),
        'require_cv' => $faker->randomElement(['yes', 'no']),
        'require_guarantor' => $faker->randomElement(['yes', 'no']),
        'other_prefrences' => $faker->text,
        'salary' => $faker->randomNumber($nbDigits = 8),
        'payment_terms' => $faker->randomElement(['weekly', 'bi-weekly', 'monthly', 'project_based'])
    ];
});
