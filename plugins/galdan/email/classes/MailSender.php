<?php namespace Galdan\Email\Classes;

use App;
use DB;
use Illuminate\Support\Collection;
use Mail;
use File;

class MailSender
{
    /**
     * @var Posts
     */
    protected $mail;

    /**
     * @var string of the used locale
     */
    protected $locale;

    /**
     * @var string replaced content
     */
    protected $replacedContent = null;

    /**
     * @var string namespace of the template
     */
    protected $templateNamespace = 'galdan.email::mail.mail';

    /**
     * @param $locale string
     * @return string path of the template file with respect to $locale
     */
    protected function templateFile($locale)
    {
        return base_path().'/plugins/galdan/email/views/mail/mail_'.$locale.'.htm';
    }

    /**
     * @return string template name with current locale
     */
    protected function template()
    {
        return 'galdan.email::mail.mail_'.$this->locale;
    }

    /**
     * MailSender constructor.
     * @param $mail Posts should be send.
     * @param $locale string of the locale, default App::getLocale()
     */
    public function __construct($mail, $locale = null)
    {
        $this->mail = $mail;
        $locale = App::getLocale();

        if (File::exists($this->templateFile($locale))) {
            $this->locale = $locale;
        }
        else {
            $this->locale = config('app.fallback_locale');
        }
    }

    /**
     * Sends the mail to one or multiple receivers
     * @param $receivers array or single user with attribute name and email
     * @return void
     */
    public function sendMail($receivers)
    {
        if (is_array($receivers) || $receivers instanceof Collection) {
            foreach ($receivers as $receiver) {
                $this->sendMail($receiver);
            }
        }
        else {
            $this->send($receivers);
        }
    }

    /**
     * Sends the mail to a receiver
     * @param $receiver object of the mail with name and email attribute
     * @return void
     */
    protected function send($receiver)
    {   
        // dd($this->mail['_message']);
        // Replace all relative URL src attributes to absolute URL's
        if ($this->replacedContent === null) {
            $url = url('/');
            // $this->replacedContent = preg_replace( '/src="\/([^"]*)"/i', 'src="'.$url.'/$1"', $this->mail->content);
        }

        $params = [
            'email'        => $receiver,
            'messagez'      => $this->mail['_message']
        ];

        Mail::send($this->template(), $params, function($message) use ($receiver)
        {
            $message->to($receiver, 'Receiver Name')->subject($this->mail['_subject']);
        // dd($this->mail['_message']);
        });
    }
}
