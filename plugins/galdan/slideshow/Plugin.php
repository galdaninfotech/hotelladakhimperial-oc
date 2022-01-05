<?php namespace Galdan\Slideshow;

use Backend;
use System\Classes\PluginBase;

/**
 * Slideshow Plugin Information File
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
            'name'        => 'Slideshow',
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
            'Galdan\Slideshow\Components\HomeSlideshow' => 'homeslideshow',
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
            'galdan.slideshow.some_permission' => [
                'tab' => 'Slideshow',
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
            'slideshow' => [
                'label'       => 'Slideshow',
                'url'         => Backend::url('galdan/slideshow/slideshows'),
                'icon'        => 'icon-leaf',
                'permissions' => ['galdan.slideshow.*'],
                'order'       => 500,
            ],
        ];
    }
}
