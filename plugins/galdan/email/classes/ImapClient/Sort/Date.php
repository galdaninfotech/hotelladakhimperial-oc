<?php namespace Galdan\Email\Classes\ImapClient\Sort;

use Galdan\Email\Classes\ImapClient\SortExpression;
//now
// require(DOCROOT.'/modules/email/imapclient/SortExpression.php');

class Date extends SortExpression
{
    public function getKeyword()
    {
        return '\SORTDATE';
    }
}