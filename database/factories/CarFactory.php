<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Car;


$factory->define(App\Vehicle::class, function (Faker $faker) {

    $faker = (new \Faker\Factory())::create();
    $faker->addProvider(new \Faker\Provider\Fakecar($faker));


    return [
        'vehicle_type'      => 'car',
        'brand'             => $v['brand'],
        'model'             => $v['model'],
        'year'              => $faker->biasedNumberBetween(1998,2017, 'sqrt'),
    ];
});
