<?php namespace Galdan\Email\Classes\ImapClient\Search\Text;

use Galdan\Email\Classes\ImapClient\Search\Text\AbstractText;

// require(DOCROOT.'/modules/email/imapclient/Search/Text/AbstractText.php');



/**
 * Represents a message text contains condition. Messages must contain the
 * specified text in order to match the condition.
 */
class Text extends AbstractText
{
    /**
     * Returns the keyword that the condition represents.
     *
     * @return string
     */
    public function getKeyword()
    {
        return 'TEXT';
    }
}
