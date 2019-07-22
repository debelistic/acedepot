<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Employer;
use Faker\Generator as Faker;

$factory->define(Employer::class, function (Faker $faker) {
    return [
        'company_name' => $faker->company,
        'what_you_do' => $faker->text,
        'employer_email' => $faker->unique()->email,
        'country' => $faker->country,
        'state' => $faker->streetName,
        'address_1' => $faker->address,
        'address_2' => $faker->address,
        'phone_number' => $faker->phoneNumber,
        'email' => $faker->email,
        'about' => $faker->text,
        'company_logo_url' => $faker->url,
        'website_url' => $faker->url,
    ];
});
