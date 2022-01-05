<?php namespace Galdan\Bikes\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Types Back-end Controller
 */
class Types extends Controller
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

        BackendMenu::setContext('Galdan.Bikes', 'bikes', 'types');
    }
}
