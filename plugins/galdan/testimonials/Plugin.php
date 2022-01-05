<?php namespace Galdan\Testimonials;

use System\Classes\PluginBase;
use Backend;
use Event;
use Galdan\Testimonials\Models\Posts;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'galdan.testimonials::lang.plugin.name',
            'description' => 'galdan.testimonials::lang.plugin.description',
            'author'      => 'galdan.testimonials::lang.plugin.author',
            'icon'        => 'icon-testimonialspaper-o',
            'homepage'    => 'https://github.com/gergo85/oc-testimonials'
        ];
    }

    public function registerNavigation()
    {
        return [
            'testimonials' => [
                'label'       => 'galdan.testimonials::lang.menu.testimonials',
                'url'         => Backend::url('galdan/testimonials/testimonials'),
                'icon'        => 'icon-testimonialspaper-o',
                'iconSvg'     => 'plugins/galdan/testimonials/assets/images/testimonials-icon.svg',
                'permissions' => ['galdan.testimonials.*'],
                'order'       => 900,

                'sideMenu' => [
                    'testimonials' => [
                        'label'        => 'galdan.testimonials::lang.menu.testimonials',
                        'url'         => Backend::url('galdan/testimonials/testimonials'),
                        'icon'        => 'icon-user',
                        'permissions' => ['galdan.testimonials.testimonials']
                    ],
                ]
            ]
        ];
    }

    public function registerReportWidgets()
    {
        // return [
        //     'Galdan\Testimonials\ReportWidgets\Posts' => [
        //         'label'   => 'galdan.testimonials::lang.widget.posts',
        //         'context' => 'dashboard'
        //     ],
        //     'Galdan\Testimonials\ReportWidgets\Testimonials' => [
        //         'label'   => 'galdan.testimonials::lang.widget.testimonials',
        //         'context' => 'dashboard'
        //     ]
        // ];
    }

    public function registerComponents()
    {
        return [
            'Galdan\Testimonials\Components\Testimonial'   => 'testimonial'
        ];
    }

    public function registerMailTemplates()
    {
        return [
            'galdan.testimonials::mail.email_en' => 'E-mail',
            'galdan.testimonials::mail.email_hu' => 'E-mail'
        ];
    }

    public function registerPermissions()
    {
        return [
            'galdan.testimonials.testimonials' => [
                'tab'   => 'galdan.testimonials::lang.menu.testimonials',
                'label' => 'galdan.testimonials::lang.permission.testimonials'
            ],
            'galdan.testimonials.statistics' => [
                'tab'   => 'galdan.testimonials::lang.menu.testimonials',
                'label' => 'galdan.testimonials::lang.permission.statistics'
            ],
            'galdan.testimonials.import_export' => [
                'tab'   => 'galdan.testimonials::lang.menu.testimonials',
                'label' => 'galdan.testimonials::lang.permission.import_export'
            ]
        ];
    }

    public function boot()
    {
        Event::listen('pages.menuitem.listTypes', function()
        {
            return [
                'post-list' => 'galdan.testimonials::lang.sitemap.post_list',
                'post-page' => 'galdan.testimonials::lang.sitemap.post_page'
            ];
        });

        Event::listen('pages.menuitem.getTypeInfo', function($type)
        {
            if ($type == 'post-list' || $type == 'post-page') {
                return Posts::getMenuTypeInfo($type);
            }
        });

        Event::listen('pages.menuitem.resolveItem', function($type, $item, $url, $theme)
        {
            if ($type == 'post-list' || $type == 'post-page') {
                return Posts::resolveMenuItem($item, $url, $theme);
            }
        });
    }
}
