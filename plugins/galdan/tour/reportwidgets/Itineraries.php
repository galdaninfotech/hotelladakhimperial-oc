<?php namespace Galdan\Tour\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Exception;

class Itineraries extends ReportWidgetBase
{
    public function render()
    {
        try {
            $this->loadData();
        }
        catch (Exception $ex) {
            $this->vars['error'] = $ex->getMessage();
        }

        return $this->makePartial('widget');
    }

    public function defineProperties()
    {
        return [
            'title' => [
                'title'             => 'Tours',
                'default'           => 'indikator.news::lang.menu.news',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error'
            ],
            'total' => [
                'title'             => 'Total',
                'default'           => true,
                'type'              => 'checkbox'
            ],
        ];
    }

    protected function loadData()
    {
        $this->vars['itineraries']   = \Galdan\Tour\Models\Itinerary::all();
    }
}
