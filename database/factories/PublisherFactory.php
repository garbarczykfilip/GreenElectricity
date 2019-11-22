<?php

use App\Entities\Publisher;
use Faker\Generator as Faker;

$factory->define(Publisher::class, function (Faker $faker) {    
    return [
        'name' => $faker->unique()->company,
    ];
});
