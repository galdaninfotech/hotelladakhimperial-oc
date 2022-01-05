<?php namespace Galdan\Tour\Models;

use Model;

/**
 * Task Model
 */
class Task extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'galdan_tour_tasks';

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
    public $belongsTo = ['post' => ['Galdan\Tour\Models\Post']];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
