<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Links;

$factory->define(Links::class, function (Faker $faker) {
    return [
        'title'         => $faker->text(25),
        'url' 			=> $faker->domainName(),
    ];
});
