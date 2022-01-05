<?php namespace Galdan\Bookings;

use Backend;
use System\Classes\PluginBase;

/**
 * Bookings Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Bookings',
            'description' => 'No description provided yet...',
            'author'      => 'Galdan',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Galdan\Bookings\Components\Form' => 'form',
            'Galdan\Bookings\Components\Bookings' => 'bookings',
            'Galdan\Bookings\Components\Booking' => 'booking',
            'Galdan\Bookings\Components\QuickForm' => 'quickform',
            'Galdan\Bookings\Components\Modify' => 'modify',
            'Galdan\Bookings\Components\Details' => 'details'
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'galdan.bookings.some_permission' => [
                'tab' => 'Bookings',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'bookings' => [
                'label'       => 'Bookings',
                'url'         => Backend::url('galdan/bookings/bookings'),
                'icon'        => 'icon-leaf',
                'permissions' => ['galdan.bookings.*'],
                'order'       => 600,
            ],
        ];
    }
}
