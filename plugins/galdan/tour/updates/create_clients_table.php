<?php namespace Galdan\Tour\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('galdan_tour_clients', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('post_id')->unsigned()->nullable()->index();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->integer('mobile')->nullable();
            $table->string('passport')->nullable();
            $table->string('visa')->nullable();
            $table->string('country')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('galdan_tour_clients');
    }
}
