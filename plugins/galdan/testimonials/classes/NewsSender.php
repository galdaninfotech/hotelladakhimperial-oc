<?php namespace Galdan\Testimonials\Classes;

use App;
use Illuminate\Support\Collection;
use Galdan\Testimonials\Models\Posts;
use Mail;
use File;

class TestimonialsSender
{
    /**
     * @var Posts
     */
    protected $testimonials;

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
    protected $templateNamespace = 'galdan.testimonials::mail.email';

    /**
     * @param $locale string
     * @return string path of the template file with respect to $locale
     */
    protected function templateFile($locale)
    {
        return base_path().'/plugins/galdan/testimonials/views/mail/email_'.$locale.'.htm';
    }

    /**
     * @return string template name with current locale
     */
    protected function template()
    {
        return 'galdan.testimonials::mail.email_'.$this->locale;
    }

    /**
     * TestimonialsSender constructor.
     * @param $testimonials Posts should be send.
     * @param $locale string of the locale, default App::getLocale()
     */
    public function __construct($testimonials, $locale = null)
    {
        $this->testimonials = $testimonials;
        $locale = App::getLocale();

        if (File::exists($this->templateFile($locale))) {
            $this->locale = $locale;
        }
        else {
            $this->locale = config('app.fallback_locale');
        }
    }

    /**
     * Sends the testimonials to one or multiple receivers
     * @param $receivers array or single user with attribute name and email
     * @return void
     */
    public function sendTestimonialsletter($receivers)
    {
        if (is_array($receivers) || $receivers instanceof Collection) {
            foreach ($receivers as $receiver) {
                $this->sendTestimonialsletter($receiver);
            }
        }
        else {
            $this->send($receivers);
        }
    }

    /**
     * Sends the testimonials to a receiver
     * @param $receiver object of the testimonials with name and email attribute
     * @return void
     */
    protected function send($receiver)
    {
        // Replace all relative URL src attributes to absolute URL's
        if ($this->replacedContent === null) {
            $url = url('/');
            $this->replacedContent = preg_replace( '/src="\/([^"]*)"/i', 'src="'.$url.'/$1"', $this->testimonials->content);
        }

        $params = [
            'name'         => $receiver->name,
            'email'        => $receiver->email,
            'title'        => $this->testimonials->title,
            'slug'         => $this->testimonials->slug,
            'introductory' => $this->testimonials->introductory,
            'summary'      => $this->testimonials->introductory,
            'content'      => $this->replacedContent,
            'image'        => $this->testimonials->image
        ];

        Mail::send($this->template(), $params, function($message) use ($receiver)
        {
            $message->to($receiver->email, $receiver->name)->subject($this->testimonials->title);
        });
    }
}
