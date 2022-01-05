<?php namespace Galdan\Tour\Models;

use Backend\Models\ExportModel;
use ApplicationException;

/**
 * Post Export Model
 */
class DayExport extends ExportModel
{
    public $table = 'galdan_tour_days';

    /**
     * @var array Relations
     */



    public $belongsTo = [
        'itinerary' => [
            'Galdan\Tour\Models\Day',
            'key' => 'id'
        ]
    ];


    /**
     * The accessors to append to the model's array form.
     * @var array
     */
    protected $appends = [
        'author_email',
        'categories'
    ];

    public function exportData($columns, $sessionKey = null)
    {
        $result = self::make()
            ->get()
            ->toArray()
        ;

        return $result;
    }

    public function getAuthorEmailAttribute()
    {
        if (!$this->itineraries) {
            return '';
        }

        return $this->itineraries->title;
    }

    public function getCategoriesAttribute()
    {
        if (!$this->post_categories) {
            return '';
        }

        return $this->encodeArrayValue($this->post_categories->lists('name'));
    }
}
