<?php namespace Galdan\Email\Classes\ImapClient\Search\Answered;


use Galdan\Email\Classes\ImapClient\Search\AbstractCondition;
// require(DOCROOT.'/modules/email/imapclient/Search/AbstractCondition.php');

/**
 * Represents a FLAGGED flag condition. Messages must have the \\FLAGGED flag
 * (i.e. urgent or important) set in order to match the condition.
 */
class Flagged extends AbstractCondition
{
    /**
     * Returns the keyword that the condition represents.
     *
     * @return string
     */
    public function getKeyword()
    {
        return 'FLAGGED';
    }
}
