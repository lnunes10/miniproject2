<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
namespace Faker\Provider;
use Faker\Generator;
use Illuminate\Database\Eloquent\Model;


class Car extends Model
{

//make,model,year
//made model for car
    public static function vehicleBrand() : string
    {
        return static::randomElement(array_keys(CarData::getBrandsWithModels()));
    }
    public static function vehicleModel($brand = null) : string
    {
        $brandsWithModels = CarData::getBrandsWithModels();
        return static::randomElement($brandsWithModels[$brand ?: static::vehicleBrand()]);
    }
    public static function vin($year = 1980)
    {
        $modelYear = static::modelYear($year);
        $regex = "([a-hj-npr-z0-9]{8})_{$modelYear}([a-hj-npr-z0-9]{7})";
        $vin = static::regexify($regex);
        return str_replace('_', self::checkDigit($vin), $vin);
    }

    private static function randomElement(array $array_keys)
    {
    }

    private static function modelYear(int $year)
    {
    }

    private static function regexify(string $regex)
    {
    }

    private static function checkDigit($vin)
    {
    }
}
