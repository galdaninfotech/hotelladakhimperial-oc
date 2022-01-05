<?php namespace Galdan\Testimonials\Updates;

use October\Rain\Database\Updates\Migration;
use DbDongle;

class UpdateTimestampsNullable extends Migration
{
    public function up()
    {
        DbDongle::disableStrictMode();

        DbDongle::convertTimestamps('galdan_testimonials_testimonials');
    }

    public function down()
    {
        // ...
    }
}
