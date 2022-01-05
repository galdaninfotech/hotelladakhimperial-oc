<?php namespace Galdan\Email\Classes\ImapClient\Search\Answered;


use Galdan\Email\Classes\ImapClient\Search\AbstractCondition;
// require(DOCROOT.'/modules/email/imapclient/Search/AbstractCondition.php');

/**
 * Represents an RECENT flag condition. Messages must have the \\RECENT flag
 * set in order to match the condition.
 */
class Recent extends AbstractCondition
{
    /**
     * Returns the keyword that the condition represents.
     *
     * @return string
     */
    public function getKeyword()
    {
        return 'RECENT';
    }
}
