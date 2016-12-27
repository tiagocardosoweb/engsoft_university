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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name'  => $faker->name,
        'email' => $faker->email,
    ];
});

$factory->define(App\Student::class, function (Faker\Generator $faker) {
    return [
        'name'      => $faker->firstName,
        'surname'   => $faker->lastName,
        'email'     => $faker->email,
        'ssn'       => $faker->numberBetween(),
        'birthdate' => $faker->date(),
        'gender'    => $faker->randomElement(['F','M']),
        'token'     => $faker->md5,
    ];
});