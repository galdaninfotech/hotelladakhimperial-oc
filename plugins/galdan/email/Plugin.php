<?php namespace Galdan\Email;

use Backend;
use System\Classes\PluginBase;

/**
 * Email Plugin Information File
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
            'name'        => 'Email',
            'description' => 'Offline IMAP Client',
            'author'      => 'Galdan Infotech',
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
            'Galdan\Email\Components\MyComponent' => 'myComponent',
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
            'galdan.email.some_permission' => [
                'tab' => 'Email',
                'label' => 'Some permission'
            ],
        ];
    }


    public function registerMailTemplates()
    {
        return [
            'galdan.email::mail.mail_en' => 'Mail',
            'galdan.email::mail.itinerary_en' => 'Itinerary',
            'rainlab.user::mail.invite' => 'Invite new user created with login and password'
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
            'email' => [
                'label'       => 'Email',
                'url'         => Backend::url('galdan/email/emails/index/Inbox'),
                'icon'        => 'icon-leaf',
                'permissions' => ['galdan.email.*'],
                'order'       => 900,
            ],
        ];
    }
}
