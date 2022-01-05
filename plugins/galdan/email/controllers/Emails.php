<?php namespace Galdan\Email\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

use Galdan\Email\Models\Email;
use Galdan\Email\Models\Mailbox;
use Galdan\Email\classes\Fetch\Server;
use Galdan\Email\classes\MailSender;
use Galdan\Tour\classes\UidGenerator;
use Mail;
use DB;
/**
 * Emails Back-end Controller
 */
class Emails extends Controller
{
   

    public $hostname;
    public $port;
    public $username;
    public $password;
    public $mailbox;
    public $server;
    public $template;

    public function __construct()
    {
        parent::__construct();

        // $this->hostname = 'imap.gmail.com';
        // $this->port = '993';
        // $this->username = 'hotelladakhimperial@gmail.com';
        // $this->password = '745hfn946hvf';
        
        // $this->hostname = 'a2plcpnl0076.prod.iad2.secureserver.net';
        // $this->port = '993';
        // $this->username = 'info@hotelladakhimperial.com';
        // $this->password = '745hfn946hvf';
        
        // $this->hostname = 'a2plcpnl0076.prod.iad2.secureserver.net';
        // $this->port = '993';
        // $this->username = 'info@wildcampladakh.com';
        // $this->password = '&MM[ymMUwrzH';

        // $this->hostname = 'imap.gmail.com';
        // $this->port = '993';
        // $this->username = 'nubu123@gmail.com';
        // $this->password = '#hmc648zns659';

        $this->hostname = 'localhost';
        $this->port = '143';
        $this->username = 'tsewang';
        $this->password = 'clc210';

        $this->template = 'galdan.email::mail.mail_en';

        BackendMenu::setContext('Galdan.Email', 'email', 'emails');
        $this->addCss('/plugins/galdan/email/assets/css/mail.css');
        $this->addCss('/plugins/galdan/email/assets/css/styles.css');
        $this->addCss('/plugins/galdan/email/assets/css/custom.css');
        $this->addJs('/plugins/galdan/email/assets/js/mail.js');
        
    }

   
    // Fetch Class Implementation
    
    public function index($mailbox = 'null') {

        if($mailbox == 'Inbox' || $mailbox == null) {
            $this->mailbox = 'INBOX';
        } else {
            $this->mailbox = 'INBOX.'.$mailbox;
        }
        $mailbox_id = Mailbox::where('name', $this->mailbox)->lists('id');
        $this->vars['emails'] = Email::where('Mailbox_Id', $mailbox_id[0])->paginate(19);
        $this->setThisMailBoxes();
        $this->vars['current_mailbox'] = $mailbox;
    }

    public function preview($mid) {
        DB::update('update galdan_email_emails set Seen = 1 where IDEmail = ?', [$mid]);
        $this->vars['email'] = Email::where('IDEmail', $mid)->get();
        $this->setThisMailBoxes();
        
    }

   

    public function setThisMailBoxes() {
        $mailboxes = Mailbox::get();
        $i = 0;
        foreach ($mailboxes as $mailbox) {
            $mail = Mailbox::where('name', $mailbox['name'])->first();
            $unseenCount = Email::where('seen', 0)->where('Mailbox_Id', $mail['id'])->count();
            $this->vars['mailboxes'][$i] = ['name' => $mailbox['name'], 'count' => $unseenCount];
            $i++;
        }
    }


    // Other Functions

    public function compose($action = null, $mid = null) {
        if(isset($mid)) {
            $this->vars['email'] = Email::where('IDEmail', $mid)->get();
            $this->vars['action'] = $action;
        }

    }

    public function onDelete($current_mailbox = null) {      
        // dd(post()); 
        $trashbox = Db::select("select id from galdan_email_mailboxes where name like '%trash%'");
        if(is_array(post('mailIds'))) {
            foreach (post('mailIds') as $key => $value) {
                // dd($value);
                $mail = DB::update('update galdan_email_emails set Mailbox_Id = '.$trashbox[0]->id.' where IDEmail = ?', [$value]);
            } 
        } else {
            $mail = DB::update('update galdan_email_emails set Mailbox_Id = '.$trashbox[0]->id.' where IDEmail = ?', [post('mailIds')]);
        }
        \Flash::success('Email moved to trash successfully');
        return \Backend::redirect('galdan\email\emails\index\\'.$current_mailbox);

    }

    public function onDraftNew() {      
        // dd(post('mail[0]')); 
        // dd($last_id[0]->id);
        $draftbox = Db::select("select id from galdan_email_mailboxes where name like '%draft%'");
        $uid = new UidGenerator;
        Email::create([
            'IDEmail' => $uid->generate(16),
            'Mailbox_Id' => $draftbox[0]->id,
            'EmailFrom' => post('mail[0]'),
            'EmailTo' => post('mail[1]'),
            'DateE' => date('Y-m-d'),
            'MsgSize' => rand(10,1000),
            'Subject' => post('mail[2]'),
            'Message' => post('mail[3]'),
            'Message_html' => post('mail[3]'),
            'Seen' => 1,
        ]);
        $last_id = Db::select("select max(id) as id from galdan_email_emails");
        DB::update('update galdan_email_emails set Seen = 0 where ID = '.$last_id[0]->id);

        \Flash::success('Email successfully saved in draft folder.');
        return \Backend::redirect('galdan\email\emails');

    }


    public function sendNewMail() {
        $mail = post();
        $receivers = explode(',', post('_to'));

        $mailsender = new MailSender($mail);
        $mailsender->sendMail($receivers);

        //generate mail id
        $uid = new UidGenerator;

        //get box id for sent
        $mailbox_id = Db::select("select id from galdan_email_mailboxes where name like '%sent%'");
        //add to db
        Email::create([
            'IDEmail' => $uid->generate(16),
            'Mailbox_Id' => $mailbox_id[0]->id,
            'EmailFrom' => post('_from'),
            'EmailTo' => post('_to'),
            'DateE' => date('Y-m-d'),
            'MsgSize' => rand(10,1000),
            'Subject' => post('_subject'),
            'Message' => post('_message'),
            'Message_html' => post('_message'),
            'Seen' => 1,
        ]);

        \Flash::success('Email sent successfully');
        return \Backend::redirect('galdan/email/emails/index/Inbox');
    }




    public function onSendReceiveAll($current_mailbox = null) {      
        $sent = $this->onSendAll();
        $received = $this->onReceiveAll($source = 'sendReceiveAll');
        \Flash::success($sent.' messages sent! <br> ');
        return \Backend::redirect('galdan\email\emails\index\\'.$current_mailbox);

    }

    public function onSendAll() {
        $outbox = Db::select("select id from galdan_email_mailboxes where name like '%outbox%'");
        $id = $outbox[0]->id;
        $mails = Db::select("select * from galdan_email_emails where Mailbox_Id =".$id);
        foreach ($mails as $mail) {
            $receivers = explode(',', $mail->EmailTo);
            $params = [
                'messagez'      => $mail->Message_html
            ];
            foreach ($receivers as $key => $value) {
                Mail::send($this->template, $params, function($message) use ($value) {
                    $message->to($value, 'Receiver Name')->subject($mail->Subject);
                });
            }
            $sentbox = Db::select("select id from galdan_email_mailboxes where name like '%sent%'");
            DB::update('update galdan_email_emails set Mailbox_Id = '.$sentbox[0]->id.' where IDEmail = ?', [$mail->IDEmail]);
        }
        \Flash::success(count($mails).' messages sent!');
        if($this->action == 'preview') {
            return \Backend::redirect('galdan/email/emails/preview/'.$this->params[0]);
        }
        return count($mails);
    }

    public function onReceiveAll(){
        // dd($this);
        ini_set('max_execution_time', 300);
        $this->server = new Server($this->hostname, $this->port);
        $this->mailbox = $this->server->mailbox = 'INBOX';
        $this->server->setAuthentication($this->username, $this->password, $tryFasterAuth=true);
        $emails = $this->server->getOrderedMessages(1, 1, $limit = 8);
        // dd($this->params[0]);
        // Email::truncate();
        $mbox = Mailbox::where('name', $this->mailbox)->lists('id');
        foreach($emails as $email) {
            $id = UidGenerator::randstring(16);
            Email::create([
                'IDEmail' => $id,
                'Mailbox_Id' => $mbox[0],
                'EmailFrom' => $email->getHeaders()->senderaddress,
                'EmailTo' => $email->getHeaders()->from[0]->mailbox,
                'DateE' => date('Y-m-d', $email->getDate()),
                'MsgSize' => $email->getOverview()->size,
                'Subject' => $email->getSubject(),
                'Message' => $email->getMessageBody($html = false),
                'Message_html' => $email->getMessageBody($html = true),
                'Seen' => 0,
            ]);
            DB::update('update galdan_email_emails set Seen = '.$email->getOverview()->seen.' where IDEmail = ?', [$id]);
        }

        $this->vars['emails'] = Email::get();
        \Flash::success(count($emails).' messages received!');
        if($this->action == 'preview') {
            return \Backend::redirect('galdan/email/emails/preview/'.$this->params[0]);
        } else if($this->action == 'index') {
            return \Backend::redirect('galdan/email/emails/index/'.$this->params[0]);
        }
        return count($emails);
    }

   
}
