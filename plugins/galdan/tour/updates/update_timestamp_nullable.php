<?php namespace Galdan\Tour\Updates;

use October\Rain\Database\Updates\Migration;
use DbDongle;

class UpdateTimestampsNullable extends Migration
{
    public function up()
    {
        DbDongle::disableStrictMode();

        DbDongle::convertTimestamps('galdan_tour_posts');
        DbDongle::convertTimestamps('galdan_tour_categories');
    }

    public function down()
    {
        // ...
    }
}
