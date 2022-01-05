<?php namespace AnandPatel\SeoExtension\Models;

use Model;

/**
 * TourPost Model
 */
class TourPost extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'anandpatel_seoextension_tour_posts';

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
    public $attachMany = [];

}