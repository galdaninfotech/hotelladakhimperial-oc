<?php namespace Galdan\Tour\Models;

use Backend\Models\ExportModel;
use ApplicationException;

/**
 * Post Export Model
 */
class PostExport extends ExportModel
{
    public $table = 'galdan_tour_posts';

    /**
     * @var array Relations
     */


    public $belongsTo = [
        'post_user' => [
            'Backend\Models\User',
            'key' => 'user_id'
        ],
        'category' => [
            'Galdan\Tour\Models\Category',
            'table' => 'galdan_tour_categories',
            'key' => 'post_id',
            'otherKey' => 'id'
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
            ->with([
                'post_user',
                'category'
            ])
            ->get()
            ->toArray()
        ;

        return $result;
    }

    public function getAuthorEmailAttribute()
    {
        if (!$this->post_user) {
            return '';
        }

        return $this->post_user->email;
    }

    public function getCategoriesAttribute()
    {
        if (!$this->post_categories) {
            return '';
        }

        return $this->encodeArrayValue($this->post_categories->lists('name'));
    }
}
