<?php namespace Galdan\Tour\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('galdan_tour_tasks', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('post_id')->unsigned()->nullable()->index();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->date('start')->nullable();
            $table->date('deadline')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('galdan_tour_tasks');
    }
}
