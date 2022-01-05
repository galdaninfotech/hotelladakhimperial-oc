<?php namespace Galdan\Testimonials\Models;

use Backend\Models\ImportModel;
use Galdan\Testimonials\Models\Testimonials as Item;
use Exception;

class TestimonialsImport extends ImportModel
{
    public $table = 'galdan_testimonials_testimonials';

    public $rules = [
        'email' => 'required|email'
    ];

    public function importData($results, $sessionKey = null)
    {
        foreach ($results as $row => $data) {
            try {
                if (!array_get($data, 'email')) {
                    $this->logSkipped($row, 'Missing email');
                    continue;
                }

                $item = $this->findDuplicateItem($data) ?: Item::make();
                $itemExists = $item->exists;

                $except = ['id'];
                foreach (array_except($data, $except) as $attribute => $value) {
                    $item->{$attribute} = $value ?: null;
                }

                $item->forceSave();

                if ($itemExists) {
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

    protected function findDuplicateItem($data)
    {
        if ($id = array_get($data, 'id')) {
            return Item::find($id);
        }

        $email = array_get($data, 'email');
        $item = Item::where('email', $email);

        return $item->first();
    }
}
