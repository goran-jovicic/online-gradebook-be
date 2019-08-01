<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Gradebook;

$factory->define(Gradebook::class, function (Faker $faker) {
    return [
        'name' => $faker->text(20),
        'professor_id' => $faker->unique()->numberBetween(1,20),
    ];
});
