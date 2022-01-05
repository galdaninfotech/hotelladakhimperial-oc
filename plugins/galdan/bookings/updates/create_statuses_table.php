<?php namespace Galdan\Bookings\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateStatusesTable extends Migration
{
    public function up()
    {
        Schema::create('galdan_bookings_statuses', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->string('slug')->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('galdan_bookings_statuses');
    }
}
