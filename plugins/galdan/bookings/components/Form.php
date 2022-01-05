<?php namespace Galdan\Bookings\Components;

use Cms\Classes\ComponentBase;
use Galdan\Bookings\Models\Booking;
use Galdan\Tour\Models\Post as Tour;
use Galdan\Clients\Models\Client;
use RainLab\User\Models\User;
use DB;
use Str;
use Mail;
use Lang;
use Validator;
use ValidationException;

class Form extends ComponentBase
{   
    public $tours;
    public $template;

    public function componentDetails()
    {
        return [
            'name'        => 'Booking Form',
            'description' => ''
        ];
    }

    public function init()
    {
        $this->page['text_messages'] = Lang::get('indikator.news::lang.messages.formd');
        $this->page['text_name']     = Lang::get('indikator.news::lang.form.name');
        $this->page['text_email']    = Lang::get('indikator.news::lang.form.email');
        $this->page['text_button']   = Lang::get('indikator.news::lang.button.form');

        $this->tours = Tour::get();
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'Slug',
                'description' => 'slug_description',
                'default'     => '{{ :slug }}',
                'type'        => 'string'
            ]
        ];
    }

    public function onBooking()
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
        
        //Send mail to company
        $to = 'tsewang@localhost.com';
        $params = [
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'checkin' => $data['checkin'],
            'num_persons' => $data['num_persons'],
            'messagez' => $data['message'],
        ];
        Mail::send('galdan.sitetools::mail.booking', $params, function($message) use ($to) {
                $message->to($to, 'Receiver Name')->subject(post('name').' : Online Booking');
            });

        //Insert booking in table
        Booking::insertGetId([
            'name'      => $data['name'],
            'email'     => $data['email'],
            'contactno'     => $data['phone'],
            'arrival'       => $data['checkin'],
            'numperson'     => $data['num_persons'],
            'requirements'      => $data['message']
        ]);

        // create client if it does not exist
        $client = Client::where('name', post('name'))->where('email', post('email'))->first();
        if(!isset($client)) {
            Client::insertGetId([
                'name'      => $data['name'],
                'email'     => $data['email'],
                'mobile'     => $data['phone']
            ]);
        }

        //create frontend user to login if it does not exist, also add user to appropraite group
        $password = Str::random(6);
        $user = User::where('name', post('name'))->where('email', post('email'))->first();
        if(!isset($user)) {
            $uid = User::insertGetId([
                'name'      => $data['name'],
                'email'     => $data['email'],
                'password'     => $password
            ]);
            $group = Db::select("select id from user_groups where name like '%client%'");
            DB::insert('insert into users_groups (user_id, user_group_id) values (?, ?)', [$uid, $group[0]->id]);

            //send username and password to client user
            $params = [
                'name' => $data['name'],
                'login' => $data['email'],
                'password' => $password
            ];
            $to = post('email');
            Mail::send('rainlab.user::mail.invite', $params, function($message) use ($to) {
                    $message->to($to, 'Receiver Name')->subject(post('name').', Your account has been created!');
                });
        } 
    }

}
