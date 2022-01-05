<?php namespace Galdan\Chat\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Chat Back-end Controller
 */
class Chats extends Controller
{

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Galdan.Chat', 'tour', 'Chats');
    }

    public function index() {
        
    }
}
