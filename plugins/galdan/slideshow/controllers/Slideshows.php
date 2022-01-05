<?php namespace Galdan\Slideshow\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Slideshows Back-end Controller
 */
class Slideshows extends Controller
{
    
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Galdan.Slideshow', 'slideshow', 'slideshows');
    }

    
}
