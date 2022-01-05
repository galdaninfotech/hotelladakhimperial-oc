<?php namespace Galdan\Tour\Components;

use Response;
use Redirect;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Galdan\Tour\Models\Post as TourPost;
use Galdan\Tour\Models\Category as TourCategory;

class RssFeed extends ComponentBase
{
    /**
     * A collection of posts to display
     * @var Collection
     */
    public $posts;

    /**
     * If the post list should be filtered by a category, the model to use.
     * @var Model
     */
    public $category;

    /**
     * Reference to the page name for the main tour page.
     * @var string
     */
    public $tourPage;

    /**
     * Reference to the page name for linking to posts.
     * @var string
     */
    public $postPage;

    public function componentDetails()
    {
        return [
            'name'        => 'galdan.tour::lang.settings.rssfeed_title',
            'description' => 'galdan.tour::lang.settings.rssfeed_description'
        ];
    }

    public function defineProperties()
    {
        return [
            'categoryFilter' => [
                'title'       => 'galdan.tour::lang.settings.posts_filter',
                'description' => 'galdan.tour::lang.settings.posts_filter_description',
                'type'        => 'string',
                'default'     => ''
            ],
            'sortOrder' => [
                'title'       => 'galdan.tour::lang.settings.posts_order',
                'description' => 'galdan.tour::lang.settings.posts_order_description',
                'type'        => 'dropdown',
                'default'     => 'created_at desc',
            ],
            'postsPerPage' => [
                'title'             => 'galdan.tour::lang.settings.posts_per_page',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'galdan.tour::lang.settings.posts_per_page_validation',
                'default'           => '10',
            ],
            'tourPage' => [
                'title'       => 'galdan.tour::lang.settings.rssfeed_tour',
                'description' => 'galdan.tour::lang.settings.rssfeed_tour_description',
                'type'        => 'dropdown',
                'default'     => 'tour/post',
                'group'       => 'Links',
            ],
            'postPage' => [
                'title'       => 'galdan.tour::lang.settings.posts_post',
                'description' => 'galdan.tour::lang.settings.posts_post_description',
                'type'        => 'dropdown',
                'default'     => 'tour/post',
                'group'       => 'Links',
            ],
        ];
    }

    public function getTourPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function getPostPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function getSortOrderOptions()
    {
        return TourPost::$allowedSortingOptions;
    }

    public function onRun()
    {
        $this->prepareVars();

        $xmlFeed = $this->renderPartial('@default');

        return Response::make($xmlFeed, '200')->header('Content-Type', 'text/xml');
    }

    protected function prepareVars()
    {
        $this->tourPage = $this->page['tourPage'] = $this->property('tourPage');
        $this->postPage = $this->page['postPage'] = $this->property('postPage');
        $this->category = $this->page['category'] = $this->loadCategory();
        $this->posts = $this->page['posts'] = $this->listPosts();

        $this->page['link'] = $this->pageUrl($this->tourPage);
        $this->page['rssLink'] = $this->currentPageUrl();
    }

    protected function listPosts()
    {
        $category = $this->category ? $this->category->id : null;

        /*
         * List all the posts, eager load their categories
         */
        $posts = TourPost::with('categories')->listFrontEnd([
            'sort'       => $this->property('sortOrder'),
            'perPage'    => $this->property('postsPerPage'),
            'category'   => $category
        ]);

        /*
         * Add a "url" helper attribute for linking to each post and category
         */
        $posts->each(function($post) {
            $post->setUrl($this->postPage, $this->controller);
        });

        return $posts;
    }

    protected function loadCategory()
    {
        if (!$categoryId = $this->property('categoryFilter'))
            return null;

        if (!$category = TourCategory::whereSlug($categoryId)->first())
            return null;

        return $category;
    }
}
