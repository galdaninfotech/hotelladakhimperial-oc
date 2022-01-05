<?php namespace Galdan\Bikes\Components;

use Cms\Classes\ComponentBase;
use Galdan\Bikes\Models\Bike as MyBike;


class Bike extends ComponentBase
{   
    public $bike;
    public function componentDetails()
    {
        return [
            'name'        => 'Bike Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'Slug',
                'description' => 'bike_slug_description',
                'default'     => '{{ :slug }}',
                'type'        => 'string'
            ]
        ];
    }

    public function onRun()
    {
        $this->bike = $this->page['bike'] = $this->loadBike();
    }

    protected function loadBike()
    {
        $slug = $this->property('slug');
        $bike = new MyBike;

        $bike = $bike->isClassExtendedWith('Galdan.Translate.Behaviors.TranslatableModel')
            ? $bike->transWhere('slug', $slug)
            : $bike->where('slug', $slug);

        $bike = $bike->first();

        return $bike;
    }
}
