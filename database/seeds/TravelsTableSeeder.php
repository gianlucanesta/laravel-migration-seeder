<?php

use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // Creo n Viaggi nella tabella Travels


        for($i = 0; $i < 10; $i++) {
            $new_travel = new Travel();
            $new_travel->departure_city->city();;
            $new_travel->arrival_city->city();;
            $new_travel->hotel_name  = $faker->text(10);
            $new_travel->hotel_stars = rand(1, 5);
            $new_travel->price = rand(200, 1000);
            $new_travel->description = $faker->words(3);
            $new_travel->name->name();;
            $new_travel->save();
        }

    }
}
