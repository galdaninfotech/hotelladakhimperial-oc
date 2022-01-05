<?php namespace Galdan\Bikes\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateBikesTable extends Migration
{
    public function up()
    {
        Schema::create('galdan_bikes_bikes', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('type_id')->unsigned()->nullable()->index();
            $table->string('name')->nullable();
            $table->string('slug')->index();
            $table->date('manufacture')->nullable();
            $table->string('registration')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('galdan_bikes_bikes');
    }
}