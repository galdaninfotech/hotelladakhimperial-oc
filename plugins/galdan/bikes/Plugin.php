<?php namespace Galdan\Bikes;

use Backend;
use System\Classes\PluginBase;
use Event;
/**
 * Bikes Plugin Information File
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
            'name'        => 'Bikes',
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
            'Galdan\Bikes\Components\Bike' => 'bike',
            'Galdan\Bikes\Components\Bikes' => 'bikes',
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
            'galdan.bikes.some_permission' => [
                'tab' => 'Bikes',
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
            'bikes' => [
                'label'       => 'Bikes',
                'url'         => Backend::url('galdan/bikes/bikes'),
                'icon'        => 'icon-leaf',
                'permissions' => ['galdan.bikes.*'],
                'order'       => 500,
            'sideMenu' => [
                    'bikes' => [
                        'label'       => 'Bikes',
                        'icon'        => 'icon-list-ul',
                        'url'         => Backend::url('galdan/bikes/bikes'),
                        'permissions' => ['galdan.bikes.access_bikes']
                    ],
                    'type' => [
                        'label'       => 'Types',
                        'icon'        => 'icon-list-ul',
                        'url'         => Backend::url('galdan/bikes/types'),
                        'permissions' => ['galdan.bikes.access_types']
                    ]
                ]
            ],
        ];
    }
}
