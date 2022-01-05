<?php namespace AnandPatel\SeoExtension\Components;

use Cms\Classes\ComponentBase;
use Event;

class TourPost extends ComponentBase
{

    public $page;
    public $seo_title;
    public $seo_description;
    public $seo_keywords;
    public $canonical_url;
    public $redirect_url;
    public $robot_index;
    public $robot_follow;

    public function componentDetails()
    {
        return [
            'name'        => 'anandpatel.seoextension::lang.component.tour.name',
            'description' => 'anandpatel.seoextension::lang.component.tour.description'
        ];
    }

    public function defineProperties()
    {
        return [
            "post" => [
                "title" => "data",
                "default" => "post"
            ]
        ];
    }

}
