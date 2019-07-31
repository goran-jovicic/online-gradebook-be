<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Student;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'image_url' => $faker->imageUrl(),
        'gradebook_id' => $faker->numberBetween(1,20)
    ];
});