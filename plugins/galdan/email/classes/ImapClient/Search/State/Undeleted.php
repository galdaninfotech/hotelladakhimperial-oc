<?php namespace Galdan\Email\Classes\ImapClient\Search\Delete;



use Galdan\Email\Classes\ImapClient\Search\AbstractCondition;
// require(DOCROOT.'/modules/email/imapclient/Search/AbstractCondition.php');

/**
 * Represents a UNDELETED condition. Messages must not have been marked for
 * deletion in order to match the condition.
 */
class Undeleted extends AbstractCondition
{
    /**
     * Returns the keyword that the condition represents.
     *
     * @return string
     */
    public function getKeyword()
    {
        return 'UNDELETED';
    }
}
