<?php namespace Galdan\Testimonials\Components;

use Cms\Classes\ComponentBase;
use Galdan\Testimonials\Models\Testimonials;
use Lang;
use Validator;
use ValidationException;

class Testimonial extends ComponentBase
{   
    public $testimonials;

    public function componentDetails()
    {
        return [
            'name'        => 'galdan.testimonials::lang.component.testimonial',
            'description' => ''
        ];
    }

    public function onRun()
    {
        $this->page['text_messages'] = Lang::get('galdan.testimonials::lang.messages.testimoniald');
        $this->page['text_name']     = Lang::get('galdan.testimonials::lang.form.name');
        $this->page['text_email']    = Lang::get('galdan.testimonials::lang.form.email');
        $this->page['text_button']   = Lang::get('galdan.testimonials::lang.button.testimonial');

        $this->testimonials = $this->loadTestimonial();
        // $this->vars['testimonials'] = $this->loadTestimonial();
    }

    public function onSubscription()
    {
        $data = post();

        // Validate input data
        $rules = [
            'name'  => 'required|between:2,64',
            'message' => 'required|between:20,1000'
        ];

        $validation = Validator::make($data, $rules);
        if ($validation->fails()) {
            throw new ValidationException($validation);
        }

        // look for unsubscribed testimonials
        $testimonialResult = Testimonials::email($data['email']);

        if ($testimonialResult->count() > 0) {
            $testimonial = $testimonialResult->first();
            if (!$testimonial->isActive()) {
                $testimonial->name = $data['name'];
                $testimonial->activate();
            }

            return;
        }

        // Register new one
        Testimonials::insertGetId([
            'name'       => $data['name'],
            'email'      => $data['email'],
            'message'     => $data['message'],
            'created'    => 2,
            'statistics' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }

    protected function loadTestimonial()
    {

        return Testimonials::all();

    }
}
