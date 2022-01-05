<?php namespace Galdan\Bookings\Components;

use Cms\Classes\ComponentBase;
use Galdan\Bookings\Models\Booking as ClientBooking;

class Modify extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Modify Component',
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
        return $booking;
    }
}
