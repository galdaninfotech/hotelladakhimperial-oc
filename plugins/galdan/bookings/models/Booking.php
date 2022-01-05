<?php namespace Galdan\Bookings\Models;

use Model;

/**
 * Booking Model
 */
class Booking extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'galdan_bookings_bookings';

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
    public $belongsTo = [ 
        'post' => 'Galdan\Tour\Models\Post',
        'status' => 'Galdan\Bookings\Models\Status',
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public static function email($email) {
        return 1;
    }
}
