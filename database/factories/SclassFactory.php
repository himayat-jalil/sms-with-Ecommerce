<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(Sclass::class, function (Faker $faker) {
    return [
        'class_name'=>$faker->word,
        'offered_date'=>$faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});