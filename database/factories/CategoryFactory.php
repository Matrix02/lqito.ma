<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'label' => $faker->name,
        'parent_id' => $faker->optional()->randomElement(App\Category::all()->pluck('id'))
    ];
});
