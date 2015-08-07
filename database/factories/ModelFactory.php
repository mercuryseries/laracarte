<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Laracarte\User::class, function (Faker\Generator $faker) {
    return [
        'username' => $faker->userName,
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('123456'),
        'website' => $faker->url,
        'github' => 'http://github.com/' . $faker->userName,
        'twitter' => 'http://twitter.com/' . $faker->userName,
        'address' => $faker->streetAddress,
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude,
        'available_for_hire' => $faker->boolean(50),
        'laravel' => $faker->numberBetween(1, 100),
        'frontend' => $faker->numberBetween(1, 100),
        'backend' => $faker->numberBetween(1, 100),
        'mobile' => $faker->numberBetween(1, 100),
        'remember_token' => str_random(10),
    ];
});
