<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'category_id' => $faker->numberBetween($min = 1, $max = 4),
        'price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 12345),
        'details' => $faker->text($maxNbChars = 200) ,
        'image'=>$faker->imageUrl($width = 640, $height = 480),


    ];
});
