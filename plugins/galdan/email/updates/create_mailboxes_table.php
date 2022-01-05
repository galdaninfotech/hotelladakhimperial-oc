<?php namespace Galdan\Email\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateMailboxesTable extends Migration
{
    public function up()
    {
        Schema::create('galdan_email_mailboxes', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('galdan_email_mailboxes');
    }
}
