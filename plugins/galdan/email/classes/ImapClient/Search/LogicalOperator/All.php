<?php namespace Galdan\Email\Classes\ImapClient\Search\LogicalOperator;


use Galdan\Email\Classes\ImapClient\Search\AbstractCondition;
// require(DOCROOT.'/modules/email/imapclient/Search/AbstractCondition.php');

/**
 * Represents an ALL operator. Messages must match all conditions following this
 * operator in order to match the expression.
 */
class All extends AbstractCondition
{
    /**
     * Returns the keyword that the condition represents.
     *
     * @return string
     */
    public function getKeyword()
    {
        return 'ALL';
    }
}
