<?php namespace Galdan\Tour\Models;

use Backend\Models\ImportModel;
use Backend\Models\User as AuthorModel;
use ApplicationException;
use Exception;

/**
 * Post Import Model
 */
class DayImport extends ImportModel
{
    public $table = 'galdan_tour_itineraries';

    /**
     * Validation rules
     */
    public $rules = [
        'name'   => 'required',
        'slug' => 'required'
    ];

    protected $authorEmailCache = [];

    protected $categoryNameCache = [];

    public function getDefaultAuthorOptions()
    {
        return AuthorModel::all()->lists('full_name', 'email');
    }

    public function getPostCategoriesOptions()
    {
        return Category::lists('name', 'id');
    }

    public function importData($results, $sessionKey = null)
    {
        $firstRow = reset($results);

        /*
         * Validation
         */
        if ($this->auto_create_categories && !array_key_exists('category', $firstRow)) {
            throw new ApplicationException('Please specify a match for the Categories column.');
        }

        /*
         * Import
         */
        foreach ($results as $row => $data) {
            try {

                if (!$title = array_get($data, 'intro')) {
                    $this->logSkipped($row, 'Missing day intro');
                    continue;
                }

                /*
                 * Find or create
                 */
                $day = Day::make();

                if ($this->update_existing) {
                    $day = $this->findDuplicateDay($data) ?: $day;
                }

                $dayExists = $day->exists;

                /*
                 * Set attributes
                 */
                $except = ['breakfast', 'lunch', 'dinner', 'accommodation', 'airline', 'train', 'bus'];

                foreach (array_except($data, $except) as $attribute => $value) {
                    $day->{$attribute} = $value ?: null;
                }


                $day->save();

                /*
                 * Log results
                 */
                if ($dayExists) {
                    $this->logUpdated();
                }
                else {
                    $this->logCreated();
                }
            }
            catch (Exception $ex) {
                $this->logError($row, $ex->getMessage());
            }
        }
    }

   
    protected function findDuplicateDay($data)
    {
        if ($id = array_get($data, 'id')) {
            return Day::find($id);
        }

        return $day->first();
    }

   
}
