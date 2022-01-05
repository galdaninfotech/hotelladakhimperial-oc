<?php

/**
 * Register System routes before all user routes.
 */

use Galdan\Tour\Models\Client;





App::before(function ($request) {
    
});


Route::get('seed-clients', function() {
    //
});

Route::get('dummy-clients', function() {
    $faker = Faker\Factory::create();

    Client::create([
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'mobile' => $faker->phoneNumber
    ]);

});