<?php namespace Galdan\Slideshow\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateSlideshowsTable extends Migration
{
    public function up()
    {
        Schema::create('galdan_slideshow_slideshows', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->integer('active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('galdan_slideshow_slideshows');
    }
}
