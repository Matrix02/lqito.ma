<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
            'title' => $faker->sentence(4),
            'body' => $faker->paragraph,
            'image' => $faker->imageUrl($width = 640, $height = 480),
            'location' => $faker->address,
            'recompense' => $faker->numberBetween($min = null, $max = 5000),
            'is_found' => $faker->boolean(20),
            'is_published' => $faker->boolean(80),
            'category_id' => factory(App\Category::class),
            'region_id' => factory(App\Region::class),
            'user_id' => factory(App\User::class),
            'listing_type' => $faker->randomElement(['lost' ,'found'])
    ];
});
