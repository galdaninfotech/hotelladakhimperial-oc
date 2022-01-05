<?php namespace Galdan\Analytics\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Analytics Back-end Controller
 */
class Analytics extends Controller
{

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Galdan.Analytics', 'tour', 'Analytics');
    }

    public function index() {
        
    }
}
