<?php namespace Galdan\Tour\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreatePostsTable extends Migration
{

    public function up()
    {
        Schema::create('galdan_tour_posts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->integer('category_id')->unsigned()->nullable()->index();
            $table->integer('itinerary_id')->unsigned()->nullable()->index();
            $table->string('title')->nullable();
            $table->string('slug')->index();
            $table->text('intro')->nullable();
            $table->longText('description')->nullable();
            $table->longText('description_html')->nullable();
            $table->date('start')->nullable();
            $table->date('end')->nullable();
            $table->integer('grade')->nullable();
            $table->text('includes')->nullable();
            $table->text('excludes')->nullable();
            $table->boolean('deleted')->default(false);
            $table->timestamp('published_at')->nullable();
            $table->boolean('published')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('galdan_tour_posts');
    }

}
