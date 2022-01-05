<?php namespace Galdan\Email\Classes\ImapClient\Sort;

use Galdan\Email\Classes\ImapClient\SortExpression;
// now
// require(DOCROOT.'/modules/email/imapclient/SortExpression.php');

class To extends SortExpression
{
    public function getKeyword()
    {
        return '\SORTTO';
    }
}