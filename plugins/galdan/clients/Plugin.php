<?php namespace Galdan\Clients;

use Backend;
use System\Classes\PluginBase;

/**
 * Clients Plugin Information File
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
            'name'        => 'Clients',
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
        return []; // Remove this line to activate

        return [
            'Galdan\Clients\Components\MyComponent' => 'myComponent',
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
            'galdan.clients.some_permission' => [
                'tab' => 'Clients',
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
            'clients' => [
                'label'       => 'Clients',
                'url'         => Backend::url('galdan/clients/clients'),
                'icon'        => 'icon-leaf',
                'permissions' => ['galdan.clients.*'],
                'order'       => 400,
            ],
        ];
    }
}
