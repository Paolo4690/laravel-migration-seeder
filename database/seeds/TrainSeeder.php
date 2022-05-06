<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $trainData = [
                'agency'            => $faker->company(),
                'departure_station' => $faker->city(),
                'arrival_station'   => $faker->city(),
                'departure_time'    => $faker->dateTimeBetween('-1 day', '+1day'),
                'arrival_times'     => $faker->dateTimeBetween('+1 day', '+2 day'),
                'train_code'        => $faker->randomNumber(5),
                'carriages'         => $faker->randomNumber(2),
                'in_time'           => $faker->numberBetween(0, 40),
                'deleted'           => $faker->numberBetween(0, 1),
            ];

            $train = new Train();
            $train->fill($trainData);
            $train->save();
        }

    }
}
