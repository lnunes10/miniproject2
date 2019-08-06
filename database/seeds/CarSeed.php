<?php

use Illuminate\Database\Seeder;
use Faker\Generator;
use App\Car;
class CarSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Car::class, 50)->create()->each(function ($u) {
            $u->()->save(factory(App\Car::class)->make());
        });
    }
}
