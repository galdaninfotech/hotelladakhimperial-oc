<?php namespace Galdan\Email\Classes\ImapClient\Search\Delete;

use Galdan\Email\Classes\ImapClient\Search\AbstractCondition;
// require(DOCROOT.'/modules/email/imapclient/Search/AbstractCondition.php');

/**
 * Represents a NEW condition. Only new messages will match this condition.
 */
class NewMessage extends AbstractCondition
{
    /**
     * Returns the keyword that the condition represents.
     *
     * @return string
     */
    public function getKeyword()
    {
        return 'NEW';
    }
}
