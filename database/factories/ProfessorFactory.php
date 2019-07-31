<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Professor;

$factory->define(Professor::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,30),
        'image_url' => $faker->imageUrl(),
    ];
});