IMAP library
============
[![Build Status](https://travis-ci.org/sgoranov/ImapClient.svg?branch=master)](https://travis-ci.org/sgoranov/ImapClient)

A PHP 5.6+ library to read and process e-mails over IMAP.

Installation
------------

Make sure the [PHP IMAP extension](http://php.net/manual/en/book.imap.php)
is installed. For instance on Ubuntu:

```bash
# apt-get install php7.0-imap
```


The recommended way to install the IMAP library is through [Composer](http://getcomposer.org):

```bash
$ composer require sgoranov/imap-client
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Usage
-----

### Connect and Authenticate

```php
use sgoranov\ImapClient\Server;

$server = new Server('imap.gmail.com');

// $connection is instance of \sgoranov\ImapClient\Connection
$connection = $server->authenticate('my_username', 'my_password');
```

#### Options 

You can specify port, [flags and parameters](http://php.net/manual/en/function.imap-open.php) 
to the server: 

```php
$server = new Server(
    $hostname, // required
    $port,     // defaults to 993
    $flags,    // defaults to '/imap/ssl/validate-cert'
    $parameters
);
```

### Mailboxes

Retrieve mailboxes (also known as mail folders) from the mail server and iterate
over them:

```php
$mailboxes = $connection->getMailboxes();

foreach ($mailboxes as $mailbox) {
    // $mailbox is instance of \sgoranov\ImapClient\Mailbox
    printf('Mailbox %s has %s messages', $mailbox->getName(), $mailbox->count());
}
```

Or retrieve a specific mailbox:

```php
$mailbox = $connection->getMailbox('INBOX');
```

Delete a mailbox:

```php
$mailbox->delete();
```

### Messages

Retrieve messages (e-mails) from a mailbox and iterate over them:

```php
$messages = $mailbox->getMessages();

foreach ($messages as $message) {
    // $message is instance of \sgoranov\ImapClient\Message
}
```

#### Searching for Messages

```php
use sgoranov\ImapClient\SearchExpression;
use sgoranov\ImapClient\Search\Email\To;
use sgoranov\ImapClient\Search\Text\Body;

$search = new SearchExpression();
$search->addCondition(new To('me@here.com'))
    ->addCondition(new Body('contents'))
;

$messages = $mailbox->getMessages($search);
```

#### Sorting Messages

Search and then sort the result:

```php
use sgoranov\ImapClient\SearchExpression;
use sgoranov\ImapClient\Search\Email\To;
use sgoranov\ImapClient\Search\Text\Body;
use sgoranov\ImapClient\Sort\Size;

$search = new SearchExpression();
$search->addCondition(new To('me@here.com'))
    ->addCondition(new Body('contents'))
;

$messages = $mailbox->getMessages($search, new Size('DESC')); // sort by size
```

Sort all the messages in the mailbox:

```php
use sgoranov\ImapClient\Sort\Date;

$messages = $mailbox->getMessages(null, new Date()); // sort by date ASC
```

#### Message Properties and Operations

Get message number and unique [message id](http://en.wikipedia.org/wiki/Message-ID)
in the form <...>:

```php
$message->getNumber();
$message->getId();
```

Get other message properties:

```php
$message->getSubject();
$message->getFrom();
$message->getTo();
$message->getDate();
$message->isAnswered();
$message->isDeleted();
$message->isDraft();
$message->isSeen();
```

Get message headers as a [\sgoranov\ImapClient\Message\Headers](https://github.com/sgoranov/ImapClient/blob/master/src/Message/Headers.php) object:

```php
$message->getHeaders();
```

Get message body as HTML or plain text:

```php
$message->getBodyHtml();
$message->getBodyText();
```

Reading the message body marks the message as seen. If you want to keep the
message unseen:

```php
$message->keepUnseen()->getBodyHtml();
```

Move a message to another mailbox:

```php
$mailbox = $connection->getMailbox('another-mailbox');
$message->move($mailbox);
```

Deleting messages:

```php
$mailbox->getMessage(1)->delete();
$mailbox->getMessage(2)->delete();
$mailbox->expunge();
```

### Message Attachments

Get message attachments (both inline and attached) and iterate over them:

```php
$attachments = $message->getAttachments();

foreach ($attachments as $attachment) {
    // $attachment is instance of \sgoranov\ImapClient\Message\Attachment
}
```

Download a message attachment to a local file:

```php
// getDecodedContent() decodes the attachment’s contents automatically:
file_put_contents(
    '/my/local/dir/' . $attachment->getFilename(),
    $attachment->getDecodedContent()
);
```

Running the Tests
-----------------

This library is functionally tested on [Travis CI](https://travis-ci.org/sgoranov/ImapClient)
against the Gmail IMAP server.

If you have your own IMAP (test) account, you can run the tests locally by 
providing your IMAP (e.g., Gmail) credentials:

```bash
$ composer install
$ export EMAIL_USERNAME="your_username" 
$ export EMAIL_PASSWORD="your_password" 
$ vendor/bin/phpunit
```

You can also set an `EMAIL_SERVER` variable, which defaults to `imap.gmail.com`:

```bash
$ export EMAIL_SERVER="imap.you.com"
```

