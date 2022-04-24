<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Order;
use Faker\Generator as Faker;
use Illuminate\Support\Str; // 這個要放哦別忘記

$factory->define(Order::class, function (Faker $faker) {
    return [
        'details'       => $this->faker->sentences(4, true),
        'client'         => $this->faker->name(),
        'is_fulfilled' => $this->faker->boolean(),
    ];
});
