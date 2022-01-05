<?php namespace Galdan\Bookings\Components;

use Cms\Classes\ComponentBase;
use Galdan\Bookings\Models\Booking as ClientBooking;
use DB;

class Booking extends ComponentBase
{
    public $client_booking;
    public function componentDetails()
    {
        return [
            'name'        => 'Booking Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'galdan.tour::lang.settings.post_slug',
                'description' => 'galdan.tour::lang.settings.post_slug_description',
                'default'     => '{{ :slug }}',
                'type'        => 'string'
            ],
        ];
    }

    public function onRun() {
        $this->client_booking = $this->page['client_booking'] = $this->loadBooking();
    }

    public function loadBooking() {
        $slug = $this->property('slug');
        $booking = new ClientBooking;

        $booking = $booking->isClassExtendedWith('Galdan.Translate.Behaviors.TranslatableModel')
            ? $booking->transWhere('id', $slug)
            : $booking->where('id', $slug);

        $booking = $booking->first();

        // $booking = DB::select('select * from galdan_bookings_bookings where id = '.$slug);

        // dd($booking);
        return $booking;
    }
}
