<?php namespace Galdan\Tour\Updates;

use Carbon\Carbon;
use Galdan\Email\Models\Mailbox;
use October\Rain\Database\Updates\Seeder;
use Faker;

class SeedAllTables extends Seeder
{

    public function run()
    {   

        Mailbox::create(['name' => 'INBOX','slug' => 'inbox',]);
        Mailbox::create(['name' => 'INBOX.Spam', 'slug' => 'spam', ]); 
        Mailbox::create(['name' => 'INBOX.Sent', 'slug' => 'sent', ]); 
        Mailbox::create(['name' => 'INBOX.Drafts', 'slug' => 'drafts', ]); 
        Mailbox::create(['name' => 'INBOX.Trash', 'slug' => 'trash', ]); 
        Mailbox::create(['name' => 'INBOX.Outbox', 'slug' => 'outbox', ]); 
        Mailbox::create(['name' => 'INBOX.Archive', 'slug' => 'archive', ]); 
        
    }

}

