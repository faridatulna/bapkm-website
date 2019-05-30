<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Article;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->text(25),
        'fileImg'		=> $faker->text(10).'jpg',
        'filePdf' 		=> $faker->text(10).'pdf',
        'url' 			=> $faker->domainName(),
        'description' 	=> $faker->text(30),
        'jenis'			=> $faker->numberBetween(0,2),
        // 0=umum , 1=beasiswa , 2=kemahasiswaan
        'tgl_post' 		=> $faker->dateTime(),
    ];
});
