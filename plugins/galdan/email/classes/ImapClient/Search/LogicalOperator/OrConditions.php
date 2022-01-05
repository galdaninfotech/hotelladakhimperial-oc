<?php namespace Galdan\Email\Classes\ImapClient\Search\LogicalOperator;


use Galdan\Email\Classes\ImapClient\Search\AbstractCondition;
// require(DOCROOT.'/modules/email/imapclient/Search/AbstractCondition.php');

/**
 * Represents an OR operator. Messages only need to match one of the conditions
 * after this operator to match the expression.
 */
class OrConditions extends AbstractCondition
{
    /**
     * Returns the keyword that the condition represents.
     *
     * @return string
     */
    public function getKeyword()
    {
        return 'OR';
    }
}
