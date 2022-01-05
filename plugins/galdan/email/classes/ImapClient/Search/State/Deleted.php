<?php namespace Galdan\Email\Classes\ImapClient\Search\Delete;


use Galdan\Email\Classes\ImapClient\Search\AbstractCondition;
// require(DOCROOT.'/modules/email/imapclient/Search/AbstractCondition.php');

/**
 * Represents a DELETED condition. Messages must have been marked for deletion
 * but not yet expunged in order to match the condition.
 */
class Deleted extends AbstractCondition
{
    /**
     * Returns the keyword that the condition represents.
     *
     * @return string
     */
    public function getKeyword()
    {
        return 'DELETED';
    }
}
