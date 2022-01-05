<?php namespace Galdan\Slideshow\Components;

use Cms\Classes\ComponentBase;
use Galdan\Slideshow\Models\Slideshow;
class HomeSlideshow extends ComponentBase
{
    public $slideshow;
    public function componentDetails()
    {
        return [
            'name'        => 'HomeSlideshow Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {

        $this->slideshow = $this->loadSlideshow();

    }

    protected function loadSlideshow()
    {
        return Slideshow::where('active', 1)->get();
    }
}
