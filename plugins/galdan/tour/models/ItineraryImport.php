<?php namespace Galdan\Tour\Models;

use Backend\Models\ImportModel;
use Backend\Models\User as AuthorModel;
use ApplicationException;
use Exception;

/**
 * Post Import Model
 */
class ItineraryImport extends ImportModel
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

                if (!$title = array_get($data, 'name')) {
                    $this->logSkipped($row, 'Missing itinerary name');
                    continue;
                }

                /*
                 * Find or create
                 */
                $itinerary = Itinerary::make();

                if ($this->update_existing) {
                    $itinerary = $this->findDuplicateItinerary($data) ?: $itinerary;
                }

                $itineraryExists = $itinerary->exists;

                /*
                 * Set attributes
                 */
                $except = ['id', 'categories', 'author_email', 'deleted', 'published'];

                foreach (array_except($data, $except) as $attribute => $value) {
                    $itinerary->{$attribute} = $value ?: null;
                }

                if ($author = $this->findAuthorFromEmail($data)) {
                    $itinerary->user_id = $author->id;
                }

                $itinerary->save();

                /*
                 * Log results
                 */
                if ($itineraryExists) {
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

    protected function findAuthorFromEmail($data)
    {
        if (!$email = array_get($data, 'email', $this->default_author)) {
            return null;
        }

        if (isset($this->authorEmailCache[$email])) {
            return $this->authorEmailCache[$email];
        }

        $author = AuthorModel::where('email', $email)->first();
        return $this->authorEmailCache[$email] = $author;
    }

    protected function findDuplicateItinerary($data)
    {
        if ($id = array_get($data, 'id')) {
            return Itinerary::find($id);
        }

        $title = array_get($data, 'title');
        $itinerary = Itinerary::where('title', $title);

        if ($slug = array_get($data, 'slug')) {
            $itinerary->orWhere('slug', $slug);
        }

        return $itinerary->first();
    }

}
