<?php namespace Galdan\Bikes\Models;

use Model;

/**
 * Type Model
 */
class Type extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'galdan_bikes_types';

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
