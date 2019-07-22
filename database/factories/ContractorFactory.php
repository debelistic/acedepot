<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Contractor;
use Faker\Generator as Faker;

$factory->define(Contractor::class, function (Faker $faker) {
    return [
        'business_name' => $faker->company,
        'contractor_email' => $faker->email,
        'business_logo' => $faker->url,
        'business_description' => $faker->text,
        'country' => $faker->country,
        'state' => $faker->streetName,
        'address_1' => $faker->address,
        'address_2' => $faker->address,
        'phone_number' => $faker->phoneNumber,
        'email' => $faker->email,
        'about' => $faker->text,
    ];
});
