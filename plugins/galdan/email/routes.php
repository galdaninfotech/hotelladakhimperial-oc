<?php

/**
 * Register Backend routes before all user routes.
 */
App::before(function ($request) {

    /*
     * Entry point
     */
    Route::any(Config::get('cms.backendUri', 'backend'), 'Backend\Classes\BackendController@run');
    Route::any(Config::get('galdan.email', 'email'), 'Galdan\Email\Emails@index');





});
