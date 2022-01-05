<?php namespace Galdan\Clients\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('galdan_clients_clients', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('post_id')->unsigned()->nullable()->index();
            $table->string('name')->unique()->nullable();
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
        Schema::dropIfExists('galdan_clients_clients');
    }
}
