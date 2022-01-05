<?php namespace Galdan\Testimonials\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Galdan\Testimonials\Models\Testimonials as Item;
use Flash;
use Lang;

class Testimonials extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.ImportExportController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $importExportConfig = 'config_import_export.yaml';

    public $requiredPermissions = ['galdan.testimonials.testimonials'];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Galdan.Testimonials', 'testimonials', 'testimonials');
    }

    public function onRemoveTestimonials()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            foreach ($checkedIds as $itemId) {
                if (!$item = Item::whereId($itemId)) {
                    continue;
                }

                $item->delete();
            }

            Flash::success(Lang::get('galdan.testimonials::lang.flash.remove'));
        }

        return $this->listRefresh();
    }
}
