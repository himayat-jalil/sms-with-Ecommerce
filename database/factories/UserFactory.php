<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => 'admin',
        'name'=>$faker->phoneNumber(),
        'email' => 'admin@gmail.com',
        'address'=>$faker->address(),
        'email_verified_at' => now(),
        'password' => '$2y$10$sBtNwgf7f3tZvfialZbA7ugO.NqeIfBpw3H6FDxE3hcNo3mbnaGI6', // admin
        'remember_token' => Str::random(10),
    ];
});