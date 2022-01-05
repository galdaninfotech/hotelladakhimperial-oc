<?php namespace Galdan\Testimonials\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreateTestimonialsTable extends Migration
{
    public function up()
    {
        Schema::create('galdan_testimonials_testimonials', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->string('email', 100)->nullable();
            $table->string('country', 100)->nullable();
            $table->string('slug')->index();
            $table->text('message')->nullable();
            $table->string('status', 1)->default(1);
            $table->string('created', 1)->default(1);
            $table->integer('statistics')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('galdan_testimonials_testimonials');
    }
}
