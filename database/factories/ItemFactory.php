<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
            'title' => $faker->title,
            'body' => $faker->paragraph,
            'image' => $faker->image,
            'location' => $faker->locale,
            'recompense' => $faker->randomDigit(null, 5000),
            'is_found' => $faker->boolean(20),
            'is_published' => $faker->boolean(80),
            'category_id' => factory(App\Category::class),
            'region_id' => factory(App\Region::class),
            'user_id' => factory(App\User::class),
            'listing_type' => $faker->randomElement(['lost' ,'found'])
    ];
});
