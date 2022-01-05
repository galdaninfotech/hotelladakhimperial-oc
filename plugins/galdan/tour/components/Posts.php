<?php namespace Galdan\Tour\Components;

use Redirect;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Galdan\Tour\Models\Post as TourPost;
use Galdan\Tour\Models\Category as TourCategory;

class Posts extends ComponentBase
{
    /**
     * A collection of posts to display
     * @var Collection
     */
    public $posts;

    /**
     * Parameter to use for the page number
     * @var string
     */
    public $pageParam;

    /**
     * If the post list should be filtered by a category, the model to use.
     * @var Model
     */
    public $category;

    /**
     * Message to display when there are no messages.
     * @var string
     */
    public $noPostsMessage;

    /**
     * Reference to the page name for linking to posts.
     * @var string
     */
    public $postPage;

    /**
     * Reference to the page name for linking to categories.
     * @var string
     */
    public $categoryPage;

    /**
     * If the post list should be ordered by another attribute.
     * @var string
     */
    public $sortOrder;

    public function componentDetails()
    {
        return [
            'name'        => 'galdan.tour::lang.settings.posts_title',
            'description' => 'galdan.tour::lang.settings.posts_description'
        ];
    }

    public function defineProperties()
    {
        return [
            'pageNumber' => [
                'title'       => 'galdan.tour::lang.settings.posts_pagination',
                'description' => 'galdan.tour::lang.settings.posts_pagination_description',
                'type'        => 'string',
                'default'     => '{{ :page }}',
            ],
            'categoryFilter' => [
                'title'       => 'galdan.tour::lang.settings.posts_filter',
                'description' => 'galdan.tour::lang.settings.posts_filter_description',
                'type'        => 'string',
                'default'     => ''
            ],
            'postsPerPage' => [
                'title'             => 'galdan.tour::lang.settings.posts_per_page',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'galdan.tour::lang.settings.posts_per_page_validation',
                'default'           => '10',
            ],
            'noPostsMessage' => [
                'title'        => 'galdan.tour::lang.settings.posts_no_posts',
                'description'  => 'galdan.tour::lang.settings.posts_no_posts_description',
                'type'         => 'string',
                'default'      => 'No posts found',
                'showExternalParam' => false
            ],
            'sortOrder' => [
                'title'       => 'galdan.tour::lang.settings.posts_order',
                'description' => 'galdan.tour::lang.settings.posts_order_description',
                'type'        => 'dropdown',
                'default'     => 'published_at desc'
            ],
            'categoryPage' => [
                'title'       => 'galdan.tour::lang.settings.posts_category',
                'description' => 'galdan.tour::lang.settings.posts_category_description',
                'type'        => 'dropdown',
                'default'     => 'tour/category',
                'group'       => 'Links',
            ],
            'postPage' => [
                'title'       => 'galdan.tour::lang.settings.posts_post',
                'description' => 'galdan.tour::lang.settings.posts_post_description',
                'type'        => 'dropdown',
                'default'     => 'tour/post',
                'group'       => 'Links',
            ],
            'exceptPost' => [
                'title'             => 'galdan.tour::lang.settings.posts_except_post',
                'description'       => 'galdan.tour::lang.settings.posts_except_post_description',
                'type'              => 'string',
                'validationPattern' => 'string',
                'validationMessage' => 'galdan.tour::lang.settings.posts_except_post_validation',
                'default'           => '',
                'group'             => 'Exceptions',
            ],
        ];
    }

    public function getCategoryPageOptions()
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

        $this->category = $this->page['category'] = $this->loadCategory();
        $this->posts = $this->page['posts'] = $this->listPosts();

        /*
         * If the page number is not valid, redirect
         */
        if ($pageNumberParam = $this->paramName('pageNumber')) {
            $currentPage = $this->property('pageNumber');

            if ($currentPage > ($lastPage = $this->posts->lastPage()) && $currentPage > 1)
                return Redirect::to($this->currentPageUrl([$pageNumberParam => $lastPage]));
        }
    }

    protected function prepareVars()
    {
        $this->pageParam = $this->page['pageParam'] = $this->paramName('pageNumber');
        $this->noPostsMessage = $this->page['noPostsMessage'] = $this->property('noPostsMessage');

        /*
         * Page links
         */
        $this->postPage = $this->page['postPage'] = $this->property('postPage');
        $this->categoryPage = $this->page['categoryPage'] = $this->property('categoryPage');
    }

    protected function listPosts()
    {
        // $category = $this->category ? $this->category->id : null;
        $category = $this->loadCategory();
        // $category = $this->category;
// dd($category[0]->id);
        /*
         * List all the posts, eager load their categories
         */
        $posts = TourPost::listFrontEnd([
            'page'       => $this->property('pageNumber'),
            'sort'       => $this->property('sortOrder'),
            'perPage'    => $this->property('postsPerPage'),
            'search'     => trim(input('search')),
            'category'   => $category[0]->id,
            'exceptPost' => $this->property('exceptPost'),
        ]);



        /*
         * Add a "url" helper attribute for linking to each post and category
         */
        $posts->each(function($post) {
            $post->setUrl($this->postPage, $this->controller);

            // $post->categories->each(function($category) {
            //     $category->setUrl($this->categoryPage, $this->controller);
            // });
        });

        return $posts;
    }

    protected function loadCategory()
    {   
        $slug = 'package';
        // dd($this->property('categoryFilter'));
        if (!$slug = $this->property('categoryFilter')) {
            return null;
        }

        $category = new TourCategory;
// dd($category);
        $category = $category->isClassExtendedWith('Galdan.Translate.Behaviors.TranslatableModel')
            ? $category->transWhere('slug', $slug)
            : $category->where('slug', $slug);

        $category = $category->get();

        // dd($category);
        return $category;
    }
}
