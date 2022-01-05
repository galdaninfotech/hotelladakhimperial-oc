<?php namespace Galdan\Email\Classes;

use App;
use DB;
use Illuminate\Support\Collection;
use Galdan\Email\Models\Itinerary;
use Galdan\tour\Models\Day;
use Mail;
use File;

class ItinerarySender
{
    /**
     * @var Posts
     */
    protected $itinerary;

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
    protected $templateNamespace = 'galdan.email::mail.itinerary';

    /**
     * @param $locale string
     * @return string path of the template file with respect to $locale
     */
    protected function templateFile($locale)
    {
        return base_path().'/plugins/galdan/email/views/mail/itinerary_'.$locale.'.htm';
    }

    /**
     * @return string template name with current locale
     */
    protected function template()
    {
        return 'galdan.email::mail.itinerary_'.$this->locale;
    }

    /**
     * ItinerarySender constructor.
     * @param $itinerary Posts should be send.
     * @param $locale string of the locale, default App::getLocale()
     */
    public function __construct($itinerary, $locale = null)
    {
        $this->itinerary = $itinerary;
        $locale = App::getLocale();

        if (File::exists($this->templateFile($locale))) {
            $this->locale = $locale;
        }
        else {
            $this->locale = config('app.fallback_locale');
        }
    }

    /**
     * Sends the itinerary to one or multiple receivers
     * @param $receivers array or single user with attribute name and email
     * @return void
     */
    public function sendItinerary($receivers)
    {
        if (is_array($receivers) || $receivers instanceof Collection) {
            foreach ($receivers as $receiver) {
                $this->sendItinerary($receiver);
            }
        }
        else {
            $this->send($receivers);
        }
    }

    /**
     * Sends the itinerary to a receiver
     * @param $receiver object of the itinerary with name and email attribute
     * @return void
     */
    protected function send($receiver)
    {
        // Replace all relative URL src attributes to absolute URL's
        if ($this->replacedContent === null) {
            $url = url('/');
            // $this->replacedContent = preg_replace( '/src="\/([^"]*)"/i', 'src="'.$url.'/$1"', $this->itinerary->content);
        }

        $params = [
            'name'         => $receiver->name,
            'email'        => $receiver->email,
            'title'        => $this->itinerary->name,
            'slug'         => $this->itinerary->slug,
            'days'         => Day::where('itinerary_id', $this->itinerary->id)->get()
        ];
        
        Mail::send($this->template(), $params, function($message) use ($receiver)
        {
            $message->to($receiver->email, $receiver->name)->subject($this->itinerary->name);
        });
    }
}
