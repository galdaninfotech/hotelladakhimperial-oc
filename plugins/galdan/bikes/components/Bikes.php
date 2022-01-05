<?php namespace Galdan\Bikes\Components;

use Cms\Classes\ComponentBase;
use Galdan\Bikes\Models\Bike as MyBike;

class Bikes extends ComponentBase
{   
    public $bikes;
    public function componentDetails()
    {
        return [
            'name'        => 'Bikes Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $this->bikes = $this->page['bikes'] = $this->listBikes();

        

        // dd($this->bikes);
    }

    public function listBikes() {
        $bikes = MyBike::all();

        return $bikes;
    }
}
