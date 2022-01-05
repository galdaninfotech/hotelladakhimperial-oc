<?php namespace Galdan\Bikes\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Bikes Back-end Controller
 */
class Bikes extends Controller
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

        BackendMenu::setContext('Galdan.Bikes', 'bikes', 'bikes');
    }
}
