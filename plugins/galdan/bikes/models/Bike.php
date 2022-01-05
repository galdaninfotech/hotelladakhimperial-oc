<?php namespace Galdan\Bikes\Models;

use Model;
use \October\Rain\Database\Traits\Sluggable;
use \October\Rain\Database\Traits\Validation;
/**
 * Bike Model
 */
class Bike extends Model
{   
    protected $id;
    protected $slugs = ['slug' => 'name'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'galdan_bikes_bikes';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    public $rules = [
        'name' => 'required',
        'slug' => ['required', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i', 'unique:galdan_bikes_bikes']
    ];

    public $attachMany = [
        'featured_images' => ['System\Models\File', 'order' => 'sort_order'],
        'content_images' => ['System\Models\File']
    ];


    /**
     * Sets the "url" attribute with a URL to this object
     * @param string $pageName
     * @param Cms\Classes\Controller $controller
     */
    public function setUrl($pageName, $controller)
    {
        $params = [
            'id'   => $this->id,
            'slug' => $this->slug,
        ];

        //expose published year, month and day as URL parameters
        if ($this->published) {
            $params['year'] = $this->published_at->format('Y');
            $params['month'] = $this->published_at->format('m');
            $params['day'] = $this->published_at->format('d');
        }

        return $this->url = $controller->pageUrl($pageName, $params);
    }


    public $belongsTo = [
        'type' => ['Galdan\Bikes\Models\Type'],
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    
}
