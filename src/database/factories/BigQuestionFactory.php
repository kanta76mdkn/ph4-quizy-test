<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BigQuestion;
use Faker\Generator as Faker;
// use Tests\Feature\BigQuestion;




$factory->define(BigQuestion::class, function (Faker $faker) {
    return [
        'name' => $this->faker->name(),
    ];
});
