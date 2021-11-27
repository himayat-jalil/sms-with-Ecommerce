<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'class_id'=>$faker->numberBetween(1,10),
        'session_id'=>1,
        'childName'=>$faker->name(),
        'gender'=>$faker->boolean(),
        'birthDate'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'placeOfBirth'=>$faker->word(),
        'homeAddress'=>$faker->address(),
        'homePhone'=>$faker->phoneNumber(),
        'momCellPhone'=>$faker->phoneNumber(),
        'dadCellPhone'=>$faker->phoneNumber(),
        'fatherName'=>$faker->name(),
        'workPlace'=>$faker->city(),
        'occupation'=>$faker->jobTitle(),
        'email'=>$faker->email(),
        'permanentAddress'=>$faker->address(),
        'currentAddress'=>$faker->address(),
        'admissionDate'=>$faker->date($format = 'Y-m-d',$max='now'),
        'imageURL'=>$faker->imageUrl($width = 640, $height = 480),
        'password'=>'$2y$10$lZDe7qjp39utY5VOmt/JLeS25by2lK9UvLxF6eT0LRgkfdO5KsmNm',  // password
    ];
});