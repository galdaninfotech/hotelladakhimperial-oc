<?php namespace Galdan\Email\Classes\ImapClient\Exception;



class MessageDeleteException extends Exception
{
    public function __construct($messageNumber)
    {
        parent::__construct(sprintf('Message %s cannot be deleted', $messageNumber));
    }
}
