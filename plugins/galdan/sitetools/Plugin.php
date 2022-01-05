<?php namespace Galdan\Sitetools;

use Backend;
use System\Classes\PluginBase;

/**
 * Sitetools Plugin Information File
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
            'name'        => 'Sitetools',
            'description' => 'All the tools you need for a website',
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
        // return []; // Remove this line to activate

        return [
            'Galdan\Sitetools\Components\Contact' => 'contact',
            'Galdan\Sitetools\Components\Address' => 'address',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'galdan.sitetools.some_permission' => [
                'tab' => 'Sitetools',
                'label' => 'Some permission'
            ],
        ];
    }


    public function registerMailTemplates()
    {
        return [
            'galdan.sitetools::mail.contact' => 'Contact Us Email to us',
            'galdan.sitetools::mail.booking' => 'Bookings E-mail to Sender'
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'sitetools' => [
                'label'       => 'Sitetools',
                'url'         => Backend::url('galdan/sitetools/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['galdan.sitetools.*'],
                'order'       => 500,
            ],
        ];
    }
}
