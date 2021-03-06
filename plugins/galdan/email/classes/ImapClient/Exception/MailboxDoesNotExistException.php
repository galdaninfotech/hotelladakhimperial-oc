<?php namespace Galdan\Email\Classes\ImapClient\Exception;



class MailboxDoesNotExistException extends Exception
{
    public function __construct($mailbox)
    {
        parent::__construct('Mailbox ' . $mailbox. ' does not exist');
    }
}
