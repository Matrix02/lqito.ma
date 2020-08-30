<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Region;
use Faker\Generator as Faker;

$factory->define(Region::class, function (Faker $faker) {
    return [
        'label' => $faker->name,
        'parent_id' => $faker->optional()->randomElement(App\Region::all()->pluck('id'))

    ];
});
