<?php namespace Galdan\Tour\Updates;

use Carbon\Carbon;
use Galdan\Bookings\Models\Status;
use October\Rain\Database\Updates\Seeder;

class SeedAllTables extends Seeder
{

    public function run()
    {   

        Status::create(['name' => 'Pending','slug' => 'pending',]);
        Status::create(['name' => 'Confirmed','slug' => 'confirmed',]);
        Status::create(['name' => 'Cancelled','slug' => 'cancelled',]);
        Status::create(['name' => 'Closed','slug' => 'closed',]);

    }

}

