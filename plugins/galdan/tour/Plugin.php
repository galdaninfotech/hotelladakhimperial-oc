<?php namespace Galdan\Tour;

use Backend;
use Controller;
use Galdan\Tour\Models\Post;
use System\Classes\PluginBase;
use Galdan\Tour\Classes\TagProcessor;
use Galdan\Tour\Models\Category;
use Event;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'galdan.tour::lang.plugin.name',
            'description' => 'galdan.tour::lang.plugin.description',
            'author'      => 'Alexey Bobkov, Samuel Georges',
            'icon'        => 'icon-pencil',
            'homepage'    => 'https://github.com/galdan/tour-plugin'
        ];
    }

    public function registerComponents()
    {
        return [
            'Galdan\Tour\Components\Post'       => 'tourPost',
            'Galdan\Tour\Components\Posts'      => 'tourPosts',
            'Galdan\Tour\Components\Categories' => 'tourCategories',
            'Galdan\Tour\Components\RssFeed'    => 'tourRssFeed'
        ];
    }

    public function registerPermissions()
    {
        return [
            'galdan.tour.access_posts' => [
                'tab'   => 'galdan.tour::lang.tour.tab',
                'label' => 'galdan.tour::lang.tour.access_posts'
            ],
            'galdan.tour.access_categories' => [
                'tab'   => 'galdan.tour::lang.tour.tab',
                'label' => 'galdan.tour::lang.tour.access_categories'
            ],
            'galdan.tour.access_other_posts' => [
                'tab'   => 'galdan.tour::lang.tour.tab',
                'label' => 'galdan.tour::lang.tour.access_other_posts'
            ],
            'galdan.tour.access_import_export' => [
                'tab'   => 'galdan.tour::lang.tour.tab',
                'label' => 'galdan.tour::lang.tour.access_import_export'
            ],
            'galdan.tour.access_publish' => [
                'tab'   => 'galdan.tour::lang.tour.tab',
                'label' => 'galdan.tour::lang.tour.access_publish'
            ],
            'galdan.tour.access_itineraries' => [
                'tab'   => 'galdan.tour::lang.tour.tab',
                'label' => 'galdan.tour::lang.tour.access_itineraries'
            ],
            'galdan.tour.access_clients' => [
                'tab'   => 'galdan.tour::lang.tour.tab',
                'label' => 'galdan.tour::lang.tour.access_clients'
            ],
            'galdan.tour.access_tasks' => [
                'tab'   => 'galdan.tour::lang.tour.tab',
                'label' => 'galdan.tour::lang.tour.access_tasks'
            ],
            'galdan.tour.access_bookings' => [
                'tab'   => 'galdan.tour::lang.tour.tab',
                'label' => 'galdan.tour::lang.tour.access_bookings'
            ]
        ];
    }

    public function registerNavigation()
    {
        return [
            'tour' => [
                'label'       => 'galdan.tour::lang.tour.menu_label',
                'url'         => Backend::url('galdan/tour/posts'),
                'icon'        => 'icon-pencil',
                'iconSvg'     => 'plugins/galdan/tour/assets/images/tour-icon.svg',
                'permissions' => ['galdan.tour.*'],
                'order'       => 500,

                'sideMenu' => [
                    'tasks' => [
                        'label'       => 'Tasks',
                        'icon'        => 'icon-list-ul',
                        'url'         => Backend::url('galdan/tour/tasks'),
                        'permissions' => ['galdan.tour.access_tasks']
                    ],
                    'posts' => [
                        'label'       => 'galdan.tour::lang.tour.posts',
                        'icon'        => 'icon-copy',
                        'url'         => Backend::url('galdan/tour/posts'),
                        'permissions' => ['galdan.tour.access_posts']
                    ],
                    'categories' => [
                        'label'       => 'galdan.tour::lang.tour.categories',
                        'icon'        => 'icon-list-ul',
                        'url'         => Backend::url('galdan/tour/categories'),
                        'permissions' => ['galdan.tour.access_categories']
                    ],
                    'itineraries' => [
                        'label'       => 'Itineraries',
                        'icon'        => 'icon-list-ul',
                        'url'         => Backend::url('galdan/tour/itineraries'),
                        'permissions' => ['galdan.tour.access_itineraries']
                    ]
                ]
            ]
        ];
    }

    public function registerFormWidgets()
    {
        return [
            'Galdan\Tour\FormWidgets\Preview' => [
                'label' => 'Preview',
                'code'  => 'preview',
            ]
        ];
    }

  


    public function registerReportWidgets()
    {
        return [
            'Galdan\Tour\ReportWidgets\Posts' => [
                'label'   => 'Tours',
                'context' => 'dashboard'
            ],
            'Galdan\Tour\ReportWidgets\Itineraries' => [
                'label'   => 'Itineraries',
                'context' => 'dashboard'
            ]
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     */
    public function register()
    {
        /*
         * Register the image tag processing callback
         */
        TagProcessor::instance()->registerCallback(function($input, $preview) {
            if (!$preview) {
                return $input;
            }

            return preg_replace('|\<img src="image" alt="([0-9]+)"([^>]*)\/>|m',
                '<span class="image-placeholder" data-index="$1">
                    <span class="upload-dropzone">
                        <span class="label">Click or drop an image...</span>
                        <span class="indicator"></span>
                    </span>
                </span>',
            $input);
        });
    }

    public function boot()
    {
        /*
         * Register menu items for the RainLab.Pages plugin
         */
        Event::listen('pages.menuitem.listTypes', function() {
            return [
                'tour-category'       => 'galdan.tour::lang.menuitem.tour_category',
                'all-tour-categories' => 'galdan.tour::lang.menuitem.all_tour_categories',
                'tour-post'           => 'galdan.tour::lang.menuitem.tour_post',
                'all-tour-posts'      => 'galdan.tour::lang.menuitem.all_tour_posts',
            ];
        });

        Event::listen('pages.menuitem.getTypeInfo', function($type) {
            if ($type == 'tour-category' || $type == 'all-tour-categories') {
                return Category::getMenuTypeInfo($type);
            }
            elseif ($type == 'tour-post' || $type == 'all-tour-posts') {
                return Post::getMenuTypeInfo($type);
            }
        });

        Event::listen('pages.menuitem.resolveItem', function($type, $item, $url, $theme) {
            if ($type == 'tour-category' || $type == 'all-tour-categories') {
                return Category::resolveMenuItem($item, $url, $theme);
            }
            elseif ($type == 'tour-post' || $type == 'all-tour-posts') {
                return Post::resolveMenuItem($item, $url, $theme);
            }
        });
    }
}
