<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;
use Faker\Generator as Faker;


class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 30; $i++) {
            $car = new Car;
            $car->brand = $faker->word();
            $car->model = $faker->word();
            $car->kilometres = $faker->numberBetween(2000, 200000);
            $car->color = $faker->safeColorName();
            $car->car_license_plate = $faker->unique()->regexify('[A-Z]{2}[0-9]{3}[A-Z]{2}');
            $car->cost = $faker->numberBetween(5000, 90000);
            $car->price = $faker->numberBetween($car->cost, 100000);
            $car->engine_supply = $faker->randomElement(['benzina', 'diesel', 'ibrida']);
            $car->image = "https://picsum.photos/300/200";
            $car->save();
        };
    }
}