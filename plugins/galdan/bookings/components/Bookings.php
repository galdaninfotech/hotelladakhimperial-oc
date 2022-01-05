<?php namespace Galdan\Bookings\Components;

use Cms\Classes\ComponentBase;
use Galdan\Bookings\Models\Booking;
use DB;
class Bookings extends ComponentBase
{   
    public $bookings;
    public function componentDetails()
    {
        return [
            'name'        => 'Bookings Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function init() {
        $this->bookings = Booking::all();
    }

    public function onCancel() {
        // dd(post('id'), 'gggggggggg');
        $mail = DB::update('update galdan_bookings_bookings set status_id = 3 where id = '.post('id'));
    }

}
