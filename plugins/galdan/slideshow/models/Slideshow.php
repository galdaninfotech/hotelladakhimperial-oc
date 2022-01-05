<?php namespace Galdan\Slideshow\Models;

use Model;

/**
 * Slideshow Model
 */
class Slideshow extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'galdan_slideshow_slideshows';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    

    public $attachMany = [
        'featured_images' => ['System\Models\File', 'order' => 'sort_order']
    ];
}
