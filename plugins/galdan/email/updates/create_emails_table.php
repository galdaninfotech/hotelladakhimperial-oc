<?php namespace Galdan\Email\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateEmailsTable extends Migration
{
    public function up()
    {
        Schema::create('galdan_email_emails', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID');
            $table->string('IDEmail')->nullable();
            $table->integer('Mailbox_Id')->unsigned()->nullable()->index();
            $table->string('EmailFrom')->nullable();
            $table->string('EmailFromP')->nullable();
            $table->string('EmailTo')->nullable();
            $table->date('DateE')->nullable();
            $table->date('DateDb')->nullable();
            $table->date('DateRead')->nullable();
            $table->date('DateRe')->nullable();
            $table->integer('Seen')->nullable();
            $table->integer('Type')->nullable();
            $table->integer('Del')->nullable();
            $table->string('Subject')->nullable();
            $table->text('Message')->nullable();
            $table->text('Message_html')->nullable();
            $table->integer('MsgSize')->nullable();
            $table->integer('Kind')->nullable();
            $table->integer('IDre')->nullable();
            $table->timestamps();
        });

        Schema::create('galdan_email_attachments', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID');
            $table->integer('IDEmail')->nullable();
            $table->string('FileNameOrg')->nullable();
            $table->string('Filedir')->nullable();
            $table->string('AttachType')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('galdan_email_emails');
        Schema::dropIfExists('galdan_email_attachments');
    }
}


