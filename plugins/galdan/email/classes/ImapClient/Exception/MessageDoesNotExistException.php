<?php namespace Galdan\Email\Classes\ImapClient\Exception;



class MessageDoesNotExistException extends Exception
{
    public function __construct($number, $error)
    {
        parent::__construct(
            sprintf(
                'Message %s does not exist: %s',
                $number,
                $error
            )
        );
    }
}
