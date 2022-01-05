<?php namespace Galdan\Tour\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateItinerariesTable extends Migration
{
    public function up()
    {
        Schema::create('galdan_tour_itineraries', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->string('name')->nullable();
            $table->string('slug')->index();
            $table->timestamp('published_at')->nullable();
            $table->boolean('published')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('galdan_tour_itineraries');
    }
}
