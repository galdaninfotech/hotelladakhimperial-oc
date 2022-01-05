<?php namespace Galdan\Sitetools\Components;

use Cms\Classes\ComponentBase;
use App;
use Mail;
use Lang;
use Validator;
use ValidationException;
class Contact extends ComponentBase
{   

    public function componentDetails()
    {
        return [
            'name'        => 'contact Component',
            'description' => 'Displays a contact form on the page'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onContact() {
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
        

        $config = App::make('config');
        $to = $config->get('site.email1');
        $params = [
            'name' => $data['name'],
            'email'     => $data['email'],
            'messagez'     => $data['message']
        ];
        Mail::send('galdan.sitetools::mail.contact', $params, function($message) use ($to) {
                    $message->to($to, 'Receiver Name')->subject(post('name').' : Online Contact');
                    $message->from('hotelladakhimperial@gmail.com', 'Hotel Ladakh Imperial');
                });
    }

    

}
