<?php namespace Galdan\Tour\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateDaysTable extends Migration
{
    public function up()
    {
        Schema::create('galdan_tour_days', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('itinerary_id')->unsigned()->nullable()->index();
            $table->integer('day')->nullable();
            $table->text('intro')->nullable();
            $table->text('description')->nullable();
            $table->string('breakfast')->nullable();
            $table->string('lunch')->nullable();
            $table->string('dinner')->nullable();
            $table->boolean('accommodation')->nullable();
            $table->boolean('airline')->nullable();
            $table->boolean('train')->nullable();
            $table->boolean('bus')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('galdan_tour_days');
    }
}
