<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Filter;

$factory->define(Filter::class, function (Faker $faker) {

    $filter_code = ['A01', 'A02', 'A03', 'A04', 'A05','A06'];
    $filter_name = ['Akademik', 'Beasiswa', 'Camaba', 'Wisuda', 'UKM','Calendar'];
	static $index = 0;
	static $index2 = 0;
	return [
	    'filter_code' => $filter_code[$index++],
	    'filter_name' => $filter_name[$index2++],
	];
});
