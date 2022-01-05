<?php namespace Galdan\Tour\Components;

use Db;
use App;
use Request;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Galdan\Tour\Models\Category as TourCategory;

class Categories extends ComponentBase
{
    /**
     * @var Collection A collection of categories to display
     */
    public $categories;

    /**
     * @var string Reference to the page name for linking to categories.
     */
    public $categoryPage;

    /**
     * @var string Reference to the current category slug.
     */
    public $currentCategorySlug;

    public function componentDetails()
    {
        return [
            'name'        => 'galdan.tour::lang.settings.category_title',
            'description' => 'galdan.tour::lang.settings.category_description'
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title'       => 'galdan.tour::lang.settings.category_slug',
                'description' => 'galdan.tour::lang.settings.category_slug_description',
                'default'     => '{{ :slug }}',
                'type'        => 'string'
            ],
            'displayEmpty' => [
                'title'       => 'galdan.tour::lang.settings.category_display_empty',
                'description' => 'galdan.tour::lang.settings.category_display_empty_description',
                'type'        => 'checkbox',
                'default'     => 0
            ],
            'categoryPage' => [
                'title'       => 'galdan.tour::lang.settings.category_page',
                'description' => 'galdan.tour::lang.settings.category_page_description',
                'type'        => 'dropdown',
                'default'     => 'tour/category',
                'group'       => 'Links',
            ],
        ];
    }

    public function getCategoryPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function onRun()
    {
        $this->currentCategorySlug = $this->page['currentCategorySlug'] = $this->property('slug');
        $this->categoryPage = $this->page['categoryPage'] = $this->property('categoryPage');
        $this->categories = $this->page['categories'] = $this->loadCategories();
    }

    protected function loadCategories()
    {
        $categories = TourCategory::orderBy('name');
        if (!$this->property('displayEmpty')) {
            $categories->whereExists(function($query) {
                $prefix = Db::getTablePrefix();

                $query
                    ->select(Db::raw(1))
                    ->from('galdan_tour_posts')
                    ->whereNotNull('galdan_tour_posts.published')
                    ->where('galdan_tour_posts.published', '=', 1)
                ;
            });
        }

        $categories = $categories->getNested();

        /*
         * Add a "url" helper attribute for linking to each category
         */
        return $this->linkCategories($categories);
    }

    protected function linkCategories($categories)
    {
        return $categories->each(function($category) {
            $category->setUrl($this->categoryPage, $this->controller);

            if ($category->children) {
                $this->linkCategories($category->children);
            }
        });
    }
}
