<?php namespace Galdan\Bookings\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Bookings Back-end Controller
 */
class Bookings extends Controller
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

        BackendMenu::setContext('Galdan.Bookings', 'bookings', 'bookings');
    }

    public function email($email) {
        return 1;
    }

    public function onCancel() {
        return 'Cancelled';
    }
}
