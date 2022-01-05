<?php namespace Galdan\Testimonials\Components;

use Cms\Classes\ComponentBase;
use Galdan\Testimonials\Models\Testimonials;
use Lang;
use Validator;
use ValidationException;
use Response;
use Flash;
use October\Rain\Exception\AjaxException;

class Unsubscribe extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'galdan.testimonials::lang.component.unsubscribe',
            'description' => ''
        ];
    }

    public function onRun()
    {
        $this->page['text_messages'] = Lang::get('galdan.testimonials::lang.messages.unsubscribed');
        $this->page['text_email']    = Lang::get('galdan.testimonials::lang.form.email');
        $this->page['text_button']   = Lang::get('galdan.testimonials::lang.button.unsubscribe');
    }

    public function onUnsubscribe()
    {
        $data = post();
        $testimonial = Testimonials::email($data['email'])->first();

        if ($testimonial === null || !$testimonial->isActive()) {
            return Response::make(Lang::get('galdan.testimonials::lang.messages.not_subscribed'), 400);
        }

        $testimonial->unsubscribe();
    }
}
