<?php namespace Galdan\Testimonials\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Statistics extends Controller
{
    public $requiredPermissions = ['galdan.testimonials.statistics'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Galdan.Testimonials', 'testimonials', 'statistics');
    }

    public function index()
    {
        $this->pageTitle = 'galdan.testimonials::lang.menu.statistics';
    }
}
