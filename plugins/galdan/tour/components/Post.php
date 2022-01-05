<?php namespace Galdan\Tour\Components;

use DB;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Galdan\Tour\Models\Post as TourPost;

class Post extends ComponentBase
{
    /**
     * @var Galdan\Tour\Models\Post The post model used for display.
     */
    public $post;

    /**
     * @var string Reference to the page name for linking to categories.
     */
    public $categoryPage;

    public function componentDetails()
    {
        return [
            'name'        => 'galdan.tour::lang.settings.post_title',
            'description' => 'galdan.tour::lang.settings.post_description'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'galdan.tour::lang.settings.post_slug',
                'description' => 'galdan.tour::lang.settings.post_slug_description',
                'default'     => '{{ :slug }}',
                'type'        => 'string'
            ],
            'categoryPage' => [
                'title'       => 'galdan.tour::lang.settings.post_category',
                'description' => 'galdan.tour::lang.settings.post_category_description',
                'type'        => 'dropdown',
                'default'     => 'tour/category',
            ],
        ];
    }

    public function getCategoryPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function onRun()
    {
        $this->categoryPage = $this->page['categoryPage'] = $this->property('categoryPage');
        $this->post = $this->page['post'] = $this->loadPost();

        // dd($this->post);
    }

    protected function loadPost()
    {
        $slug = $this->property('slug');
// dd($slug);
        $post = new TourPost;

        $post = $post->isClassExtendedWith('Galdan.Translate.Behaviors.TranslatableModel')
            ? $post->transWhere('slug', $slug)
            : $post->where('slug', $slug);

        // $post = $post->where('id', 1)->get();

        // $post = Db::table('galdan_tour_posts')->where('slug', $slug)->get();
        $post = $post->first();
// dd($post);
        /*
         * Add a "url" helper attribute for linking to each category
         */
        // if ($post && $post->categories->count()) {
        //     $post->categories->each(function($category) {
        //         $category->setUrl($this->categoryPage, $this->controller);
        //     });
        // }

        return $post;
    }

    public function previousPost()
    {
        return $this->getPostSibling(-1);
    }

    public function nextPost()
    {
        return $this->getPostSibling(1);
    }

    protected function getPostSibling($direction = 1)
    {
        if (!$this->post) {
            return;
        }

        $method = $direction === -1 ? 'previousPost' : 'nextPost';

        if (!$post = $this->post->$method()) {
            return;
        }

        $postPage = $this->getPage()->getBaseFileName();

        $post->setUrl($postPage, $this->controller);

        $post->categories->each(function($category) {
            $category->setUrl($this->categoryPage, $this->controller);
        });

        return $post;
    }
}
