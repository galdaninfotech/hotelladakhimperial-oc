<?php namespace Indikator\News\Components;

use Cms\Classes\ComponentBase;
use Indikator\News\Models\Subscribers;
use Lang;
use Validator;
use ValidationException;

class Subscribe extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'indikator.news::lang.component.subscribe',
            'description' => ''
        ];
    }

    public function onRun()
    {
        $this->page['text_messages'] = Lang::get('indikator.news::lang.messages.subscribed');
        $this->page['text_name']     = Lang::get('indikator.news::lang.form.name');
        $this->page['text_email']    = Lang::get('indikator.news::lang.form.email');
        $this->page['text_button']   = Lang::get('indikator.news::lang.button.subscribe');
    }

    public function onSubscription1()
    {
        $data = post();

        // Validate input data
        $rules = [
            'name'  => 'required|between:2,64',
            'email' => 'required|email|between:8,64'
        ];

        $validation = Validator::make($data, $rules);
        if ($validation->fails()) {
            throw new ValidationException($validation);
        }

        // look for unsubscribed subscribers
        $subscriberResult = Subscribers::email($data['email']);

        if ($subscriberResult->count() > 0) {
            $subscriber = $subscriberResult->first();
            if (!$subscriber->isActive()) {
                $subscriber->name = $data['name'];
                $subscriber->activate();
            }

            return;
        }

        // Register new one
        Subscribers::insertGetId([
            'name'       => $data['name'],
            'email'      => $data['email'],
            'common'     => '',
            'created'    => 2,
            'statistics' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
