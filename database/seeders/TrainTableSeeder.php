<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        foreach (range(1,50) as $index) {
            DB::table('trains')->insert([
                'company' => $faker->company,
                'departure_station' => $faker->city,
                'arrival_station' => $faker->city,
                'departure_time' => $faker->dateTimeBetween('-1 week', '+1 week'),
                'arrival_time' => $faker->dateTimeBetween('+1 week', '+2 weeks'),
                'train_code' => $faker->regexify('[A-Z]{3}[0-9]{4}'),
                'carriage_number' => $faker->numberBetween(1,20),
                'on_time' => $faker->boolean,
                'cancelled' => $faker->boolean,
            ]);
        }
    }
}