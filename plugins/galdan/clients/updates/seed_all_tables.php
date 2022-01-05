<?php namespace Galdan\Tour\Updates;

use Carbon\Carbon;
use Galdan\Clients\Models\Client;
use October\Rain\Database\Updates\Seeder;
use Faker;

class SeedAllTables extends Seeder
{

    public function run()
    {   
        $faker = Faker\Factory::create();

        for($i = 0; $i < 100; $i++){
            Client::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'mobile' => $faker->phoneNumber,
                'passport' => $faker->phoneNumber,
                'visa' => $faker->phoneNumber,
                'country' => $faker->country,
            ]);
        }
        

        
    }

}

