<?php namespace Galdan\Email\Models;

use Model;

/**
 * Email Model
 */
class Email extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'galdan_email_emails';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['IDEmail', 'Mailbox_Id', 'EmailFrom', 'EmailTo', 'DateE', 'Subject', 'Message', 'Message_html', 'MsgSize', 'Seen'];
    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = ['mailbox' => 'Galdan\Email\Models\Mailbox'];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
