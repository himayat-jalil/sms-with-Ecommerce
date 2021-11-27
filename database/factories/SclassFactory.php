<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sclass;
use Faker\Generator as Faker;

$factory->define(Sclass::class, function (Faker $faker) {
    return [
        'className'=>$faker->word(),
        'offerDate'=>$faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});