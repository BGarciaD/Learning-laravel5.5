<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Profession::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence
        //'title' => $faker->sentence(3, false) This way the sentence would have a limit of three words
    ];
});
