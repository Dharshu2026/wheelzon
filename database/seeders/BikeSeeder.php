<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bike;

class BikeSeeder extends Seeder
{
    public function run()
    {
        $bikes = [
            ['name' => 'RX100', 'price_per_day' => 2000, 'image' => 'bike-5.jpg'],
            ['name' => 'Z900', 'price_per_day' => 3500, 'image' => 'bike-6.png'],
            ['name' => 'H2R', 'price_per_day' => 2500, 'image' => 'bike-7.jpg'],
            ['name' => 'Ducati Monster', 'price_per_day' => 4000, 'image' => 'bike-8.jpg'],
            ['name' => 'R15 V4', 'price_per_day' => 1800, 'image' => 'bike-9.jpg'],
            ['name' => 'KTM Duke 390', 'price_per_day' => 2200, 'image' => 'bike-10.jpeg'],
            ['name' => 'Royal Enfield Hunter', 'price_per_day' => 1600, 'image' => 'bike-11.jpg'],
            ['name' => 'Yamaha MT15', 'price_per_day' => 1700, 'image' => 'bike-12.jpg'],
            ['name' => 'Pulsar N250', 'price_per_day' => 1400, 'image' => 'bike-13.jpg'],
            ['name' => 'BMW G310R', 'price_per_day' => 3000, 'image' => 'bike-14.webp'],
            ['name' => 'BMW S1000RR', 'price_per_day' => 5500, 'image' => 'bike-15.webp'],
            ['name' => 'BMW R1250GS', 'price_per_day' => 5000, 'image' => 'bike-16.webp'],
        ];

        foreach ($bikes as $bike) {
            Bike::create($bike);
        }
    }
}
