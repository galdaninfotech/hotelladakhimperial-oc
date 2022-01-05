<?php namespace Galdan\Bookings\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('galdan_bookings_bookings', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('post_id')->unsigned()->index()->nullable();
            $table->string('name', 100);
            $table->string('email', 100)->nullable();
            $table->string('contactno', 100)->nullable();
            $table->date('arrival')->nullable();
            $table->integer('numperson')->nullable();
            $table->text('requirements')->nullable();
            $table->integer('status_id')->default(1)->unsigned()->index()->nullable();
            $table->string('slug')->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('galdan_bookings_bookings');
    }
}
