<?php 
define('DOCROOT', realpath(dirname(__FILE__)));

//require(DOCROOT.'Server;

require(DOCROOT.'/modules/email/imapclient/server.php');
require(DOCROOT.'/modules/email/imapclient/SearchExpression.php');
require(DOCROOT.'/modules/email/imapclient/Search/Email/To.php');
require(DOCROOT.'/modules/email/imapclient/Search/Email/FromAddress.php');
require(DOCROOT.'/modules/email/imapclient/Search/Text/Text.php');

$hostname = 'localhost';
$port = '143';
$server = new Server(
    $hostname, // required
    $port
);
// $connection = $server->authenticate('tsewang', 'clc210');
// $mailboxes = $connection->getMailboxes();
// foreach ($mailboxes as $mailbox) {
//     // $mailbox is instance of \sgoranov\ImapClient\Mailbox
//     printf('Mailbox %s has %s messages', $mailbox->getName(), $mailbox->count());
// }
$condition[] = '';
$search = new SearchExpression();
$search->addCondition(new Text('hello'));
//$search->addCondition($condition);
//setEmail('tsewang@localhost.com');
$connection = $server->authenticate('tsewang', 'clc210');
$mailbox = $connection->getMailbox('INBOX');
$messages = $mailbox->getMessages($search);

//var_dump($messages);
foreach ($messages as $message) {
    echo $messages->current()->getSubject().'<br>';
    echo $messages->current()->getFrom().' - <br>';
    echo $messages->current()->getDate().' - <br>';
    echo $messages->current()->getSize().' - <br>';
    echo $messages->current()->getContent($keepUnseen = false).'<br><hr>';
    //echo $messages->getBodyHtml().'<br>';
    


 // public function index() {
    //     $hostname = 'localhost';
    //     $port = '143';
    //     $server = new Server($hostname, $port);
    //     $connection = $server->authenticate('tsewang', 'clc210');

    //     $mails = new Email();
    //     $this->vars['emails'] = $mails->getMails($connection);
    // }

    // public function preview($mid) {
    //     $hostname = 'localhost';
    //     $port = '143';
    //     $server = new Server($hostname, $port);
    //     $connection = $server->authenticate('tsewang', 'clc210');

    //     $mail = new Email();
    //     $this->vars['email'] = $mail->getMail($connection, $mid);
    // }

    // public function compose() {

    // }

    // public function sendmail() {
    //     $vars = ['name' => 'Joe', 'user' => 'Mary'];

    //     Mail::send('galdan.email::mail.email_en', $vars, function($message) {

    //         $message->to('tsewang@localhost.com', 'Tsewang Norboo');
    //         $message->subject('This is a reminder');

    //     });
    //     // dump(post('_to'));
    // }
    // 
    // 
    // 
}
