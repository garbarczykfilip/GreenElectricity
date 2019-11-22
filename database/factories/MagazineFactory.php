<?php

use App\Entities\Magazine;
use Faker\Generator as Faker;

$factory->define(Magazine::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->text($maxNbChars = 20),
    ];
});
