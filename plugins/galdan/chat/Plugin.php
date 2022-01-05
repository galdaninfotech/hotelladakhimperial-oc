<?php namespace Galdan\Chat;

use Backend;
use System\Classes\PluginBase;

/**
 * Chat Plugin Information File
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
            'name'        => 'Chat',
            'description' => 'Online Chat Support for clients on website',
            'author'      => 'Galdan',
            'icon'        => 'icon-chat'
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
            'Galdan\Chat\Components\MyComponent' => 'myComponent',
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
            'galdan.chat.some_permission' => [
                'tab' => 'Chat',
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
            'chat' => [
                'label'       => 'Chat',
                'url'         => Backend::url('galdan/chat/chats'),
                'icon'        => 'icon-leaf',
                'permissions' => ['galdan.chat.*'],
                'order'       => 900,
            ],
        ];
    }
}
