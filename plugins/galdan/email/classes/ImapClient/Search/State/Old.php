<?php namespace Galdan\Email\Classes\ImapClient\Search\Delete;



use Galdan\Email\Classes\ImapClient\Search\AbstractCondition;
// require(DOCROOT.'/modules/email/imapclient/Search/AbstractCondition.php');

/**
 * Represents an OLD condition. Only old messages will match this condition.
 */
class Old extends AbstractCondition
{
    /**
     * Returns the keyword that the condition represents.
     *
     * @return string
     */
    public function getKeyword()
    {
        return 'OLD';
    }
}
