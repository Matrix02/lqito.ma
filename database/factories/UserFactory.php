<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt(Str::random(10)), // password
        'remember_token' => Str::random(10),
        'phone' => $faker->phoneNumber,
        'image' => $faker->name,
        'role_id' => factory(App\Role::class),
    ];
});
